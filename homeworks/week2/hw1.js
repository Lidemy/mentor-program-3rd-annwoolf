function printStars(n) {
  let stars = '';
  for (let i = 1; i <= n; i += 1) {
    stars += '* \n';
  }
  console.log(stars);
}
printStars(5);
