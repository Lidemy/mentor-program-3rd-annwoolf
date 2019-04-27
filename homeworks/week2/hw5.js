function join(str, concatStr) {
  let sum = '';
  for (let i = 0; i <= str.length - 2; i += 1) {
    sum += str[i] + concatStr;
  }
  sum += str[str.length - 1];
  return sum;
}
console.log(join(['a', 'b', 'c'], '!'));

function repeat(str, times) {
  let sum = '';
  for (let i = 1; i <= times; i += 1) {
    sum += str;
  }
  return sum;
}
console.log(repeat('a', 5));
