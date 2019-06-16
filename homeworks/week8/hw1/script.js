const request = new XMLHttpRequest();
request.open('GET', 'https://dvwhnbka7d.execute-api.us-east-1.amazonaws.com/default/lottery', true);
request.send();

request.onload = function onLoad() {
  if (request.status >= 200 && request.status < 400) {
    console.log(request.responseText);
    const { prize } = JSON.parse(request.responseText);
    const button = document.querySelector('.lottery');
    const first = document.querySelector('.first');
    const second = document.querySelector('.second');
    const third = document.querySelector('.third');
    const none = document.querySelector('.none');
    const body = document.querySelector('body');
    document.querySelector('button').addEventListener('click', () => {
      if (prize === 'FIRST') {
        button.classList.add('hidden');
        first.classList.remove('hidden');
        body.classList.add('bg-change');
      } else if (prize === 'SECOND') {
        button.classList.add('hidden');
        second.classList.remove('hidden');
      } else if (prize === 'THIRD') {
        button.classList.add('hidden');
        third.classList.remove('hidden');
      } else {
        button.classList.add('hidden');
        none.classList.remove('hidden');
        body.classList.add('bg-change-fail');
      }
    });
  } else {
    console.log('err');
  }
};
request.onerror = function printError() {
  alert('系統不穩定，請再試一次');
};
