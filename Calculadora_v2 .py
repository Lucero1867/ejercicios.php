#incompleto
operacion = input("Ingrese operación:")
limpia1 = preg_replace('/\s+/', ' ', operacion)
limpia2 = trim(limpia1)
operadores = explode(' ', limpia2)
#print_r($operadores)

num1 = int(operadores[0])
num2 = int(operadores[2])
operador = operadores[1]

def suma(num1, num2):
    resultado = num1 + num2
    return resultado


def resta(num1, num2):
    resultado = num1 - num2
    return resultado


def division(num1, num2):
    if num2 == 0 :
        return "No se puede dividir entre cero"
    resultado = num1 / num2
    return resultado


def multiplicacion(num1, num2):
    resultado = num1 * num2
    return resultado


if operador == "+":
    print(suma(num1, num2))

elif(operador == "-"):
    print(resta(num1, num2))

elif(operador == "/"):
    print(division(num1, num2)) 
    
elif(operador == "*"):
    print(multiplicacion(num1, num2)) 
    
else:
    print("Esta operacion  es incorrecto")


