import math

dividendo = int(input("Dividendo: "))
divisor = int(input("Divisor: "))

if dividendo % divisor == 0 :
    print("La divion es exacta \n") 
else:
    print("La division no es exacta\n")

cuociente = math.floor(dividendo / divisor)
resto = dividendo % divisor
 
print("Cuociente:", cuociente, "\n") 
print("resto:", resto, "\n") 