min = 0
max = 100
numero = round((min + max) / 2)

i = 0
menor = "<"
mayor = ">"
igual = "="
respuesta = ""

while respuesta != igual:
    i = i + 1
    print("Intento " + str(i) + ": " + str(numero) + "\n")
    respuesta = input("")

    if respuesta == menor:
        max = numero
        numero = round((min + max) / 2)
    elif respuesta == mayor:
        min = numero
        numero = round((min + max) / 2)
    elif respuesta == igual:
        print("Adivine en " + str(i) + " intentos.")
