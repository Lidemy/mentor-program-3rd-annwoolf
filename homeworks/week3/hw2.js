function alphaSwap(str) {
  let result = '';
  for (let i = 0; i < str.length; i += 1) {
    if (str[i] >= 'a' && str[i] <= 'z') {
      result += str[i].toUpperCase();
    } else if (str[i] >= 'A' && str[i] <= 'Z') {
      result += str[i].toLowerCase();
    } else {
      result += str[i];
    }
  }
  return result;
}

console.log(alphaSwap('nick'));
console.log(alphaSwap('Nick'));
console.log(alphaSwap(',hEllO123'));

module.exports = alphaSwap;
