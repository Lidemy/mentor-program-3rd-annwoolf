function paddingLeft(s, len) {
  let padded = '';
  for (let i = 0; i < len - s.length; i += 1) {
    padded += '0';
  }
  padded += s;
  return padded;
}

function add(str1, str2) {
  const maxLen = Math.max(str1.length, str2.length);
  const s1 = paddingLeft(str1, maxLen);
  const s2 = paddingLeft(str2, maxLen);
  let sSum = '';
  let carr = 0;
  for (let i = maxLen - 1; i >= 0; i -= 1) {
    let sum = parseInt(s1[i], 10) + parseInt(s2[i], 10) + carr;
    carr = parseInt(sum / 10, 10);
    sum %= 10;
    sSum = sum + sSum;
  }
  if (carr === 1) {
    sSum = `1${sSum}`;
  }
  return sSum;
}
console.log(add('111', '222'));
console.log(add('99', '1'));
console.log(add('111111111111111111111111111111', '222222222222222222222222222222'));

module.exports = add;
