def calculatePi(digits):
  try:
    result = 0
    if int(digits)<1:
      result = 'Invalid'
      return result
    for n in range(1,int(digits)+1):
      n=n-1
      result = result + 4*((-1.0)**n/(2.0*n+1.0))
  except:
    result = 'Invalid'
  return result

number_of_digits = input()
print(calculatePi(number_of_digits))