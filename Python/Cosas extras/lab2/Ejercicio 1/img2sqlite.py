#Grabar las imagenes en una base de datos Imagenes.db Utilizando la Tabla Fotos.
#La estructura de Fotos es: { id pkai, fecha date, hora time, img blob, r blob, g blob, b blob, gris blob}.
# Usar Sqlite y virtual serial port emulator

import serial as se, sqlite3 as sq, time as ti,os

#-------------------Conexion serial con img2com:----------------------------------
s = se.Serial("COM1")
s.baudrate = 9600
#-------------------Leer los datos desde img2com:----------------------------------

#-------------------Conexion a la base de datos:----------------------------------

try:
    con = sq.connect('C:\Users\Zhux\Desktop\lab2\Imagenes.db')
    cursor = con.cursor()
    print  "La base de datos se abrio correctamente"
except:
    print "No se puso hacer la conexion"


cursor.execute('''CREATE TABLE Fotos
              (id INT   PRYMARY KEY  NOT NULL,
               fecha    DATE         NOT NULL,
               hora     TIME         NOT NULL,
               img      BLOB         NOT NULL,
               r        BLOB,
               g        BLOB,
               b        BLOB,
               gris     BLOB)''')
print "Tabla creada con exito"



def getFecha():
    return ti.strftime("%d%m%y")

def getHora():
    return ti.strftime("%H%M%S")

def getImg():
    lis = [filename for filename in os.listdir('Imagenes/')]

def red():
    lis = [filename for filename in os.listdir('Imagenes/Red')]
def green():
    lis = [filename for filename in os.listdir('Imagenes/Green')]

def blue():
    lis = [filename for filename in os.listdir('Imagenes/Blue')]
def gris():
    lis = [filename for filename in os.listdir('Imagenes/Gris')]
def negada():
    lis = [filename for filename in os.listdir('Imagenes/Negada')]
#-------------------Insertar los datos a la bd:----------------------------------
def ingresarDatos():
    sql = "INSERT INTO Fotos(id,fecha,hora,img,r,g,b,gris) Values(Null,?,?,?,?,?,?,?)"
    fecha = getFecha()
    print fecha
    hora = getHora()
    print hora
    img = getImg()
    r = red()
    g = green()
    b = blue()
    gr = gris()
    ng = negada()
    cursor.execute(sql,[fecha,hora,img,r,g,b,gr])
    con.commit() # Realiza los cambios en la bd


ingresarDatos()

con.close()



























