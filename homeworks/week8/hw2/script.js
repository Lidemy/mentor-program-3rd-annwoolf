const request = new XMLHttpRequest();
const requestPost = new XMLHttpRequest();
request.open('GET', 'https://lidemy-book-store.herokuapp.com/posts?_limit=20&_sort=id&_order=desc', true);
request.send();

function getmessage() {
  if (request.status >= 200 && request.status < 400) {
    const msgs = JSON.parse(request.responseText); // list of objects 要轉成list
    let result = []; // result要先定義在全域變數的地方，不然call不到
    const latest = document.querySelector('.latest_20');
    latest.innerHTML = ''; // 要先清空，不然會一直重新往下面append
    msgs.forEach((msg) => { // 遍歷 objects
      // console.log(msg); //obj: {id, content}
      result = `${msg.id} ${msg.content}`; // 印出結果 id 和 content ， $ 號要放在變數外
      latest.innerHTML // 如果只有=會只印出最後一個
                += `<div>${result}</div>`;
    });
  } else {
    console.log('err');
  }
}

request.onload = getmessage; // assign an object to an object so don't have to write getmessage()
request.onerror = function printError() {
  alert('系統不穩定，請再試一次');
};

// 跟 get 用同一個 post 會進入 onload，除非寫判斷式判斷現在是 get 還是 post，更快的方法是直接寫兩個不同的 request
const button = document.querySelector('button');
const input = document.querySelector('input');
button.addEventListener('click', () => {
  requestPost.open('POST', 'https://lidemy-book-store.herokuapp.com/posts', true);
  requestPost.setRequestHeader('Content-type', 'application/x-www-form-urlencoded'); // 告訴server，你的type是什麼
  const params = `content=${input.value}`; // Must be put into the eventHandler because this value may be changed for each time before clicking
  requestPost.send(params);
  request.open('GET', 'https://lidemy-book-store.herokuapp.com/posts?_limit=20&_sort=id&_order=desc', true);
  request.send();
  input.value = '';
});
