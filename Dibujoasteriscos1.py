#triangulo

altura = int(input("Altura: "))

for i in range(altura + 1):
    for j in range(i):
        print("*", end = '') 
    print()
