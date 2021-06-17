from datetime import datetime

print("Ingrese su fecha de nacimiento")
dia = int(input("Día: "))
mes = int(input("Mes: "))
anno = int(input("Año: "))

fecha = datetime.now()

if mes < fecha.month:
    resultado = abs(anno - fecha.year)
elif mes > fecha.month:
    resultado = abs(anno - fecha.year) - 1
elif mes == fecha.month and dia > fecha.day:
    resultado = abs(anno - fecha.year) - 1
elif mes == fecha.month and dia < fecha.day or anno != fecha.year:
    resultado = abs(anno - fecha.year)
else:
    resultado = 0
    
print("Usted tiene", resultado, "años")



