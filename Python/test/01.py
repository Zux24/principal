
n = 3
f = n
c = 3
matriz = []
for f in range(n):
    matriz.append([0]*c)

print ("Llenar matriz\n")
for fila in range(0,n):
    for columna in range(0,c):
        if(columna==0):
            precio = int(input("Precio del producto: "))
            matriz[fila][columna] = precio
        if(columna==1):
            cantidad = int(input("Cantidad de productos: "))
            matriz[fila][columna] = cantidad
        if(columna==2):
            matriz[fila][columna] = precio*cantidad

for a in matriz:
    print (a)