function print(n) {
  let printStar = '';
  for (let j = 1; j <= n; j += 1) {
    printStar += '*';
  }
  return printStar;
}

function stars(n) {
  const arr = [];
  for (let i = 1; i <= n; i += 1) {
    arr.push(print(i));
  }
  return arr;
}

module.exports = stars;
