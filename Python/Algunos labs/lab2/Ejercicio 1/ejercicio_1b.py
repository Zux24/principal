
import serial as se, sqlite3 as sq, time as ti,os

try:
    con = sq.connect('C:\Users\Zhux\Desktop\lab2\Ejercicio 1\Img.db')
    cursor = con.cursor()
    print  "La base de datos se abrio correctamente"
except:
    print "No se puso hacer la conexion"


cursor.execute('''CREATE TABLE Fotos(id INTEGER PRIMARY KEY AUTOINCREMENT,img BLOB)''')
print "Tabla creada con exito"


def ingresarDatos():
    lis = [filename for filename in os.listdir('Imagenes/')]
    sql = "INSERT INTO Fotos(img) Values(?);"
    for a in lis:
        sFile = "Imagenes/" + a
        imgdata = open(sFile,'r').read()
        img = sq.Binary(imgdata)
        cursor.execute(sql,(img,))
        con.commit() # Realiza los cambios en la bd


def verdatos():


#ingresarDatos()

verdatos()

con.close()
