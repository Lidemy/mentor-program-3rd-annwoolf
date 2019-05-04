const isPrime = require('./hw3');

describe('hw3', () => {
  it('should return correct answer when n = 1', () => {
    expect(isPrime(1)).toBe(false);
  });
  it('should return correct answer when n = 1', () => {
    expect(isPrime(37)).toBe(true);
  });
  it('should return correct answer when n = 1', () => {
    expect(isPrime(38)).toBe(false);
  });
});
