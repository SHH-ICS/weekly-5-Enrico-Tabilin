def calculatePi(digits):
  try:
    result = 0
    if int(digits)<0:
      result = 'Invalid'
      return result
    for n in range(int(digits)+1):
      result = result + 4*((-1)**n/(2*n+1))
  except:
    result = 'Invalid'
  return result

number_of_digits = input()
print(calculatePi(number_of_digits))