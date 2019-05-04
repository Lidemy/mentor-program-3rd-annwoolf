const alphaSwap = require('./hw2');

describe('hw2', () => {
  it('should return correct answer when str = nick', () => {
    expect(alphaSwap('nick')).toBe('NICK');
  });
  it('should return correct answer when str = nick', () => {
    expect(alphaSwap('Nick')).toBe('nICK');
  });
  it('should return correct answer when str = nick', () => {
    expect(alphaSwap(',hEllO123')).toBe(',HeLLo123');
  });
});
