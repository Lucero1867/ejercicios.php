puntajeA = 0
puntajeB = 0

while puntajeA < 3 and puntajeB < 3:
    jugadorA = input("Jugador A: ")
    jugadorB = input("Jugador B: ")    

    if jugadorA == "tijera" and jugadorB == "papel":
        puntajeA = puntajeA + 1
    elif jugadorB == "tijera" and jugadorA == "papel":
        puntajeB = puntajeB + 1
    elif jugadorA == "papel" and jugadorB == "piedra":
        puntajeA = puntajeA + 1
    elif jugadorB == "papel" and jugadorA == "piedra":
        puntajeB = puntajeB + 1
    elif jugadorA == "piedra" and jugadorB == "tijera":
        puntajeA = puntajeA + 1
    elif jugadorB == "piedra" and jugadorA == "tijera":
        puntajeB = puntajeB + 1
    
    print(str(puntajeA), "-", str(puntajeB), "\n")
    

if puntajeA == 3:
    print("Gana Jugador A")
else:
    print("Gana Jugador B")