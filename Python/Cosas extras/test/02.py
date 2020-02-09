
def menu():
    print ("Menu:\n" \
          "0)Suma\n" \
          "1)Resta\n" \
          "2)Multiplicacion\n" \
          "3)Division\n" \
          "4)Potencia\n" \
          "5)Residuo\n" \
          "6)Factorial\n" \
          "7)Promedio\n" \
          "8)Salir\n")

def suma(x,y):
    return x+y

def resta(x,y):
    return x - y

def multiplicacion(x,y):
    return x * y
def division(x,y):
    return x / y
def potencia(x,y):
    return x ** y
def residuo(x,y):
    return  x % y
def factorial(x):
    f = 1
    for i in range(x):
        f *= x
        x -=1
    return f
def promedio(x,y):
    return  (x + y)/2
def calculadora():
    op = int(input("Seleccione opcion:\n"))
    while (op>=0 and op<8):
        x = int(input("Ingrese Numero:\n"))
        if(op!=6):
            y = int(input("Ingrese otro numero:\n"))
        if(op==0):
            print ("Resultado de la suma: ", suma(x,y))
        if (op == 1):
            print ("Resultado de la resta: ", resta(x,y))
        if (op == 2):
            print ("Resultado de la multiplicacion: ",multiplicacion(x,y))
        if (op == 3):
            print ("Resultado de la division: ", division(x,y))
        if (op == 4):
            print ("Resultado de la potencia: ",potencia(x,y))
        if (op == 5):
            print ("Resultado del residuo: ",residuo(x,y))
        if (op == 6):
            print ("Resultado del factorial: ",factorial(x))
        if (op == 7):
            print ("Resultado del promedio: ",promedio(x,y))
        menu()
        op = int(input("Seleccione otra opcion:\n"))


menu() # llamar a la funcion menu

calculadora() # llamar a la funcion calculadora
