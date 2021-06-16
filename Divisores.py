
num = int(input("Ingrese numero: "))

for i in range(1, num + 1):
    resto = num % i
    if resto == 0 :
        print(i, end = ' ')
    
    
