lis = []
#Leer archivo y agregar a la lista:
f = open("90012958.DAT","r")
lineas = 0
while lineas < 1543:
    lis.append(f.readline())
    lineas+=1
print(lis)
f.close()
#Escribir el archivo nuevo con los datos del array:
w = open("A90012958.DAT","w")
for i in lis:
    w.write(i)
w.close()