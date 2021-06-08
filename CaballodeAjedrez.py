def caballo(fila, columna):
    posiciones = [
        [fila - 1, columna + 2],
        [fila - 1, columna - 2],
        [fila - 2, columna - 1],
        [fila - 2, columna + 1],
        [fila + 1, columna + 2],
        [fila + 1, columna - 2],
        [fila + 2, columna - 1],
        [fila + 2, columna + 1],
    ]

    for i in range(1, 8):
        if posiciones[i][0] < 1 or posiciones [i][0] > 8 and posiciones[i][1] < 1 or posiciones[i][1] > 8:
            posiciones.pop(i)
    
    return posiciones


print("Ingrese coordenadas del caballo\n")
fila = int(input("Fila: "))
columna = int(input("Columna: "))

#Valida posición inválida
if fila > 8 or columna >8:
    print("Posición invalida.")

caballos = caballo(fila, columna)

print("El caballo puede saltar de " + str(fila) + ", " + str(columna) + ": \n")

for caballo in caballos:
    print(str(caballo[0]) + " - " + str(caballo[1]))