import MySQLdb as sql
import socket

def tabla(cursor):
    cursor.execute("select * from alumno")
    text = cursor.fetchall()
    ide = ""
    nombre = ""
    n1 = ""
    n2 = ""
    for i in text:
        ide = ide + str(i[0]) + ","
        nombre = nombre + str(i[1]) +","
        n1 = n1 + str(i[2]) + ","
        n2 = n2 + str(i[3]) + ","
    sc.send(str(len(ide)))
    sc.send(str(len(nombre)))
    sc.send(str(len(n1)))
    sc.send(str(len(n2)))
    sc.send(str(ide))
    sc.send(str(nombre))
    sc.send(str(n1))
    sc.send(str(n2))

def user(cursor):
    ide = int(sc.recv(2))
    cursor.execute("select * from alumno where Id = %d" % (ide))
    text = cursor.fetchall()
    for i in text:
        sc.send(str(len(str(i[0]))))
        sc.send(str(len(str(i[1]))))
        sc.send(str(len(str(i[2]))))
        sc.send(str(len(str(i[3]))))

        sc.send(str(i[0]))
        sc.send(str(i[1]))
        sc.send(str(i[2]))
        sc.send(str(i[3]))

def add_user(cursor,con):
    long_nom = int(sc.recv(2))

    nom = sc.recv(long_nom)
    n1 = int(sc.recv(3))
    n2 = int(sc.recv(3))

    consul = cursor.execute("insert into alumno (Nombre, N1, N2) values ('%s',%d,%d)" % (nom,n1,n2))
    con.commit()
    if consul == 1:
        print "Se ha ingresado el alumno: %s" % nom
        print "Puntaje en Matematicas: %d" % n1
        print "Puntaje en Lenguaje: %d \n" % n2
        sc.send("Alumno ingresado Exitosamente")

con = sql.connect("localhost","root","1234","personas")
cursor = con.cursor()

print "Si el programa falla porfavor vuelva a intentarlo"
#cursor.execute(consul)

print "Esperando...."

s = socket.socket(socket.AF_INET, socket.SOCK_STREAM)
s.bind(("", 9999))

s.listen(2)
sc, port = s.accept()
print port[0],"\n"

while True:
    x = int(sc.recv(2))
    if x == 1:
        print port[0]
        print "Se ha solicitado todos los datos...."
        tabla(cursor)
        print "Enviado todos los datos de la tabla\n"

    if x == 2:
        print port[0]
        print "Buscando alumno..."
        user(cursor)
        print "Enviando los datos solicitados\n"

    if x == 3:
        print port[0]
        print "Agregando alumno..."
        add_user(cursor,con)
        print "Alumno agregado con exito\n"

    if x == 4:
        print "Coneccion terminada"
        break

sc.close()
s.close()




