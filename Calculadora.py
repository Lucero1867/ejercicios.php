
num1 = int(input("Operando: "))
operador = input(str("Operador: "))
num2 = int(input("Operando: "))

if operador == "+":
    resultado = num1 + num2
    print(num1 ,"+" , num2 , "=" , resultado)
elif operador == "-":
    resultado = num1 - num2
    print(num1 , "-" , num2 , "=" , resultado)
elif operador == "*":
    resultado = num1 * num2
    print(num1 , "*" , num2 , "=" , resultado)
elif operador == "/":
    if  num2 == 0:
        print("No se puede dividir entre cero")
    else:
        resultado = num1 / num2
        print(num1, "/" , num2 , "=" , resultado)
else:
    resultado = num1 ** num2
    print(num1 , "**" , num2 , "=" , resultado)