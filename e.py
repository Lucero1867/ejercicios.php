#incompleto
def factorial(numero):
  factorial = 1 
  for i in range(1, numero + 1):
    factorial = factorial * i
    
  return factorial

suma = 0
contador = 0

suma = 1/factorial(0)

while 1/factorial(contador) > 0.0001:
  contador = contador + 1
  suma = suma + 1/factorial(contador)
  
  
print(round(suma, 12))




