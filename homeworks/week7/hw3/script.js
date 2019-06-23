let print = '';
let result = 0;
let prevOp = '=';
let resetPrint = true;

document.querySelectorAll('button').forEach((item) => {
  item.addEventListener('click', () => {
    const getNumber = item.getAttribute('data-value');
    const getOp = item.getAttribute('op-value');
    if (getOp) {
      const num = parseInt(print, 10);
      switch (prevOp) {
        case '+':
          result += num;
          break;
        case '-':
          result -= num;
          break;
        case '*':
          result *= num;
          break;
        case '/':
          if (num === 0) {
            alert('Division by zero');
          } else {
            result /= num;
          }
          break;
        default:
          result = num;
          break;
      }
      if (getOp === 'AC') {
        result = 0;
        prevOp = '=';
      } else {
        prevOp = getOp;
      }
      print = result.toString();
      resetPrint = true;
      console.log(result);
    } else if (resetPrint) {
      print = getNumber;
      resetPrint = false;
    } else {
      print += getNumber;
    }
    document.querySelector('.result').innerText = `${print}`;
  });
});
