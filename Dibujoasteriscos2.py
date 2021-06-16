#incompleto
lado = 4 #readline("Lado: ")

for i in range(lado + 1):
    for j in range(10): 
        if j < lado - i:
            print(" ", end = '')
        elif j >= lado - i and j <= 7 + i: 
            print("*", end = '') 
        else:
            print(" ", end = '')

    print("K") 


for i in range(3, 0):
    for j in range(1, 8 + 1):
        if j < lado - i:
            print(" ", end = '')
        elif j >= lado - i and  j <= 7 + i:
            print("*", end = '') 
        else:
            print(" ", end = '')
            
    print("K") 


