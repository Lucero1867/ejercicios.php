
a = int(input("Ingrese a: "))
b = int(input("Ingrese b: "))

if  a == 0 and b == 0:
    print("Infinita solución") 
elif a == 0:
    print("Sin solución")
else :
    x = 0 - b / a
    print("Solución única:", x) 