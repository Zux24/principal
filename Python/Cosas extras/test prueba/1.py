

nEntero = int(raw_input("Ingresar numero entero: "))
if nEntero%2==0: # si es doble(es par)
    mitad = nEntero/2  # Saber la mitad del numero que se ingreso
    if mitad%2==0: # hacer la comparacion entre el doble y la mitad
        print "Este es el doble de un numero par: ",mitad
    else:
        print "Este es el doble de un numero impar: ",mitad
else:   #No es doble, ya que es impar
    print "Este numero no es doble de un numero, ya que es impar."