import Tkinter
import ImageTk, Image
from PIL import Image, ImageEnhance, ImageFilter, ImageOps
import sqlite3
import os
import time

#nombre de archivos de paso que se usan en este codigo
a=["_/a.jpg", "_/b.jpg","_/c.jpg","_/d.jpg","_/e.jpg", "_/f.jpg"]


#***************************************************************************
# PARTE 1 - lee imagenes desde carpeta IMG y las guarda en la BD
#                 (original, roja, verde, azul, gris, invertida)
#***************************************************************************

#obtiene nombres de imagenes en carpeta IMG
def listarImagenes(carpeta):
    rutabsoluta = os.path.join(os.getcwd(), carpeta)
    return os.listdir(rutabsoluta)

#carga la imagen inidicada
def carga(ar):
    with open(ar, 'rb') as entrada:
        blob  = entrada.read()
    return blob

#aplica tinte a una imagen con el color indicado
def tinteImagen(src, color="#FFFFFF", alpha=0.5):
    overlay = Image.new(src.mode, src.size, color)
    bw_src = ImageEnhance.Color(src).enhance(0.0)
    return Image.blend(bw_src, overlay, alpha)

#guarda en tabla la imagen orginal, la con tinte rojo, la con
#tinte verde, la con tinte azul, la en color gris, y la invertida
def guardarImagen(cn, ar):
    fecha=time.ctime(os.path.getctime(ar))
    hora=fecha

    #guarda cada imagen en archivo de paso
    im=Image.open(ar)
    im.save(a[0])
    trojo = tinteImagen(im, "#ff0000", 0.5)
    trojo.save(a[1])
    tverde = tinteImagen(im, "#00ff00", 0.5)
    tverde.save(a[2])
    tazul = tinteImagen(im, "#0000ff", 0.5)
    tazul.save(a[3])
    gris =ImageOps.grayscale(im)
    gris.save(a[4])
    invertida=ImageOps.invert(im)
    invertida.save(a[5])

    #lee cada imagen desde archivo de paso
    original = carga(a[0]) 
    rojo = carga(a[1])
    verde = carga(a[2])
    azul = carga(a[3])
    gris = carga(a[4])
    invertida = carga(a[5])

    #convierte a binario cada imagen leida
    blobo = sqlite3.Binary(original)
    blobr = sqlite3.Binary(rojo)
    blobv = sqlite3.Binary(verde)
    bloba = sqlite3.Binary(azul)
    blobg = sqlite3.Binary(gris)
    blobi  = sqlite3.Binary(invertida)
    
    #ruta  = os.path.basename(ar)
    
    sql = '''INSERT INTO IMAGENES (FECHA, HORA, IMAGEN, ROJO, VERDE, AZUL, GRIS, INVER)
                                          VALUES(?,?,?,?,?,?,?,?);'''

    #ejecuta la sentencia sql
    cn.execute(sql,[fecha,hora,blobo,blobr,blobv,bloba,blobg,blobi])
    cn.commit()



#***************************************************************************
# PARTE 2 - no codificada
#***************************************************************************


#***************************************************************************
# PARTE 3 - lee imagenes desde la Base de datos y las muestra
#                 (original, roja, verde, azul, gris, invertida)
#***************************************************************************

#grabar una imagen en disco
def graba(ar, b):
    with open(ar,'wb') as f:
        f.write(b)
    f.close()
    
#lee desde tabla la imagen original, la con tinte rojo, la con tinte
#verde, la con tinte azul, la en color gris y la original invertida
def leerImagen(cursor, estaId):
    sql = "SELECT IMAGEN, ROJO, VERDE, AZUL, GRIS, INVER FROM IMAGENES WHERE ID = " + str(estaId)
    cursor.execute(sql)
    blob=cursor.fetchone()
    for i in range(5):
        graba(a[i], blob[i])







#---------------------------------------------------------------------------------------------------------
d = 0


def accion():
    d = 1
    print d

    
#funcion principal
def main():
    # crea una base de datos
    con = sqlite3.connect('miBD')
    cur = con.cursor()

    #crea una tabla (la borra si existia)
    cur.execute('drop table if exists IMAGENES')
    sql  = '''create table if not exists IMAGENES(
             ID            INTEGER PRIMARY KEY AUTOINCREMENT,
             FECHA     date,
             HORA       time,
             IMAGEN   BLOB,
             ROJO       BLOB,
             VERDE     BLOB,
             AZUL       BLOB,
             GRIS        BLOB,
             INVER      BLOB);'''
    con.cursor().execute(sql)

    # obtiene nombres de todas las imagenes en carpeta IMG
    lista = listarImagenes('IMG')

    # guarda todas esas imagenes en la tabla
    for f in lista:
        guardarImagen(con, 'IMG/' + f)

    # muestra todas las imagenes guardadas en la tabla
    sql = "SELECT * FROM IMAGENES"
    cur = con.cursor()
    cur.execute(sql)
    n = len(cur.fetchall())
    
    ventana = Tkinter.Tk()
    ventana.geometry("%dx%d+%d+%d" % (810, 510, 0, 0))
    canvas = Tkinter.Canvas(width=900, height=600,bg='black')
    boton = Tkinter.Button(ventana, text="Mas", command=accion)
    boton.place(x=770,y=10)

    #ciclo mediante el cual se lee cada registro y entonces se
    #muestran las 6  imagenes BLOB que contiene cada uno
    f   = 1
    c  = 1
    cur = con.cursor()
    id = 0
    while id < n:
        id = id + 1
        f = 1
        c = 1
        leerImagen(cur, id)
        for i in range(6):
            if i==0:
                d =  0
            im = Image.open(a[i])  
            w = im.size[0]
            h = im.size[1]
            img = ImageTk.PhotoImage(im)
            label = Tkinter.Label(ventana, image=img)
            label.image = img
            label.grid(row=f, column=c)
            ventana.update()    
            c = c  +  1
            if c > 3:
                c = 1
                f = f + 1
            
    ventana.mainloop()           
    cur.close()
    con.close()

#entrada al programa
if __name__ == "__main__":
    main()
                      
