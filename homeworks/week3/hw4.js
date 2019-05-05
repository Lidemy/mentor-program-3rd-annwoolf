function isPalindromes(str) {
  let result = '';
  for (let i = str.length - 1; i >= 0; i -= 1) {
    result += str[i];
  }
  if (result === str) {
    return true;
  } return false;
}

console.log(isPalindromes('abcba'));
console.log(isPalindromes('apple'));
console.log(isPalindromes('aaaaa'));
console.log(isPalindromes('applppa'));

module.exports = isPalindromes;
