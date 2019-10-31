/* eslint-disable func-names */
function Stack() {
  const arr = [];
  // 陣列有幾個數，第幾個數等於參數
  this.push = function (num) {
    arr[arr.length] = num;
  };
  this.pop = function () {
    // 把最後一個數字刪掉
    // 把最後一個數字印出來
    const last = arr[(arr.length) - 1];
    arr.splice((arr.length - 1), 1);
    return last;
  };
}

// 先進來，後出去
const stack = new Stack();
stack.push(10);
stack.push(5);
console.log(stack.pop()); // 5
console.log(stack.pop()); // 10

function Queue() {
  const arr = [];
  this.push = function (num) {
    arr[arr.length] = num;
  };
  this.pop = function () {
    // 把第一個數字刪掉
    // 把第一個數字印出來
    const first = arr[0];
    arr.splice(0, 1);
    return first;
  };
}

// 先進來，先出去
const queue = new Queue();
queue.push(1);
queue.push(2);
console.log(queue.pop()); // 1
console.log(queue.pop()); // 2
