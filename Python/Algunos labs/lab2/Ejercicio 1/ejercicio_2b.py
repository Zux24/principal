
import serial, sqlite3 as sq, time as ti,os

"""
try:
    con = sq.connect('C:\Users\Zhux\Desktop\lab2\Ejercicio 1\Img.db')
    cursor = con.cursor()
    print  "La base de datos se abrio correctamente"
except:
    print "No se puso hacer la conexion"

a = cursor.execute('select img from Fotos;')
print "Tabla creada con exito"

if not os.path.exists("Imagenes/Nuevas"): os.makedirs("Imagenes/Nuevas")
cn = 0
for img in a.fetchall():
    nFile = 'Imagenes/Nuevas/newimage %s.jpg' %(str(cn))
    f = open(nFile,'w')
    cn +=1
    f.write(img)
    f.close()
"""


import serial

s = serial.Serial("COM1")
s.baudrate = 9600

while 1:
 t = s.readline()[:-1]
 if t == '@':
    break
 else:

    print t
s.close()