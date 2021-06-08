anno = int(input("Ingrese su año: "))

if anno % 4 == 0 and anno % 100 != 0:
    print(str(anno) + " si es año bisiesto")
elif anno % 100 == 0 and anno % 400 == 0:
    print(str(anno) + " si es año bisiesto")
else:
    print(str(anno) + " no es año bisiesto")

    

    



