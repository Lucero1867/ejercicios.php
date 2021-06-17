
dia = int(24)
actual = int(input("Hora actual:  "))
cantidad = int(input("Cantidad de horas: "))
resultado = ((cantidad % dia) + actual) % dia

print("En", cantidad, "horas, el reloj marcara las",resultado) 
