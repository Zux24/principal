
#ejercicio 1


bencina = ["Bencina 93","Bencina 95", "Bencina 97"]
valorbencinas = [600,650,700]

print "Bencinas disponibles:"
for i in range(len(bencina)): #recorer las listas
    print (i),")",bencina[i], valorbencinas[i]
opcion = int(raw_input("Elija una Bencina e ingrese el numero: "))
print "Eligio la opcion: ", bencina[opcion],"$",valorbencinas[opcion]
print "Forma de pago: "
print "1) Tarjeta de Credito."
print "2) Efectivo"
f = int(raw_input("Elija la opcion e ingrese el numero: "))
apagar = int(raw_input("Total a pagar: "))
totalbencina = apagar/valorbencinas[opcion]
print "Total de litros: ",totalbencina