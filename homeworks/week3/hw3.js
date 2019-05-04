function isPrime(n) {
  if (n === 1) return false;
  for (let i = 2; i <= Math.sqrt(n); i += 1) {
    if (n % i === 0) {
      return false;
    }
  }
  return true;
}

console.log(isPrime(2));
console.log(isPrime(3));
console.log(isPrime(10));
console.log(isPrime(37));
console.log(isPrime(38));

module.exports = isPrime;
