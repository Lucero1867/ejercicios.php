
rol = str(input("Ingrese tu rut: "))

inverse = rol[::-1]
total = 0

for i in range(len(inverse)):
    total = int(total) + ((i % 6) + 2) * int(inverse[i])

modulo = (total % 11) - 11
print(rol,modulo) 

