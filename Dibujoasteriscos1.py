#triangulo

altura = int(input("Altura: "))

for i in range(altura):
    for j in range(i):
        print("*", end = '') 
    print()
