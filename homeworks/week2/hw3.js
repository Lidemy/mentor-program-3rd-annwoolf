function reverse(str) {
  let sum = '';
  for (let i = str.length - 1; i >= 0; i -= 1) {
    const printWords = str.charAt(i);
    sum += printWords;
  }
  console.log(sum);
}
reverse('hello');
