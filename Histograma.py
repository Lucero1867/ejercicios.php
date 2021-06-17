
numero = 1
positivo = ""
negativo = ""

while numero != 0:
    numero = int(input("Ingrese numero: "))
    if numero > 0:
        positivo = positivo + "*"
    elif numero < 0:
        negativo = negativo + "*"
    

print("Positivos: ", positivo) 
print("Negativos: ", negativo ) 