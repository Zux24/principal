
a = []
b = []
n = int(input("ingresar una cantidad de datos que seran guardados: "))
for x in range(n):
    valorA = int(input("Ingresar una edad para la lista A: "))
    a.append(valorA)
    valorB = int(input("Ingresar una edad para la lista B: "))
    b.append(valorB)
print ("Imprimir lista A: ",a)
print ("Imprimir lista B: ",b)
#crear una lista C:
c = []
promedio = 0
for i in range(0,len(a)): #empieza de 0 al largo
    suma = a[i]+b[i]#Suma de las edades
    c.append(suma)
    promedio+=suma
print ("Valores de la lista C: ",c)
promedio = promedio/len(c)
print ("promedio de la lista C: ",promedio)