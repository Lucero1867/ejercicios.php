from random import randint

print("Adivine el numero\n")
numero = randint(0, 100)

i = 0
respuestas = 1

while respuestas != numero:
    i = i + 1
    respuestas = input("Intento " + str(i) + ": ")
    if numero < int(respuestas):
        print("Es menor que " + str(respuestas) + "\n")
    elif numero > int(respuestas):
        print("Es mayor que " + str(respuestas) + " \n")
    elif numero == int(respuestas):
        print("Correcto. Adivinaste en " + str(i) + " intentos.")
