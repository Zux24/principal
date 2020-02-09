import socket

def tabla():
    lon_ide = int(s.recv(3))
    lon_nom = int(s.recv(3))
    lon_n1 = int(s.recv(3))
    lon_n2 = int(s.recv(3))

    ide = s.recv(lon_ide).split(",")
    nombre = s.recv(lon_nom).split(",")
    n1 = s.recv(lon_n1).split(",")
    n2 = s.recv(lon_n2).split(",")
    cont = len(nombre)
    print "+---+-----------------------------------+---------+---------+"
    print "|Id |Nombre Completo                    | Ptj Mat | Ptj Len |"
    for i in range(len(nombre)):
        n = int(34-int(len(nombre[i])))
        print "+---+-----------------------------------+---------+---------+"
        if cont == 1:
            break
        print "| %s | %s%s|   %s   |   %s   |" % (ide[i], nombre[i]," "*n,n1[i], n2[i])
        cont-=1
    print "\n"

def user():
    ide= int(raw_input("Ingrese id a buscar: "))
    s.send(str(ide))

    long_num = int(s.recv(2))
    long_nom = int(s.recv(2))
    long_n1 = int(s.recv(2))
    long_n2 = int(s.recv(2))

    num = s.recv(long_num)
    nom = s.recv(long_nom)
    n1 = s.recv(long_n1)
    n2 = s.recv(long_n2)

    n = int(34-int(len(nom)))
    print "+---+-----------------------------------+---------+---------+"
    print "|Id |Nombre Completo                    | Ptj Mat | Ptj Len |"
    print "+---+-----------------------------------+---------+---------+"
    print "| %s | %s%s|   %s   |   %s   |" % (num, nom," "*n,n1, n2)
    print "+---+-----------------------------------+---------+---------+\n"

def add_user():
    nom = raw_input("Ingrese nombre completo: ")
    n1 = raw_input("Ingrese puntaje Matematicas: ")
    n2 = raw_input("ingrese puntaje Lenguaje: ")

    s.send(str(len(nom)))

    s.send(str(nom))
    s.send(str(n1))
    s.send(str(n2))

    exito = s.recv(30)
    print exito

s = socket.socket()
s.connect(("localhost",9999))


while True:
    print "Que desea hacer?"
    print "1 Mostrar todos los alumnos"
    print "2 Buscar un alumno"
    print "3 Ingresar un nuevo alumno"
    print "4 Salir"
    x = int(raw_input("Ingrese seleccion: "))
    print "\n"
    if x == 1:
        s.send(str(x))
        tabla()

    if x == 2:
        s.send(str(x))
        user()

    if x == 3:
        s.send(str(x))
        add_user()

    if x == 4:
        s.send(str(x))
        print "Coneccion terminada"
        break

s.close()








"""Felipe Alejandro Soto Soto 800 100
Carla Belen Moya Moreno 750 578
Mario Ernesto Rivas Vallejos 378 617
Francisco Javier Munoz Conejeros 780 800
Roberto Anibal Gonzales Prieto 210 369"""