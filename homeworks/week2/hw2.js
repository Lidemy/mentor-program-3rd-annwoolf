function capitalize(str) {
  const firstWord = str.charAt(0);
  const pattern = new RegExp('[A-Za-z]+');
  const char = str.toUpperCase().charAt(0) + str.substring(1);
  if (pattern.test(firstWord)) {
    return char;
  } return str;
}
console.log(capitalize(',hello'));
