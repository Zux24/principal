
from pygame.locals import *
import pygame as pg, sys

#iniciar pygame
def Inicio_pygame():
    pg.init()
    pg.display.set_caption("Ejercicio 4 - Laboratorio 3")
    pg.display.set_mode((900,700))
    return

#Cargar imagen
def Load_Image(sFile,transp=False):
    try: image = pg.image.load(sFile)
    except pg.error,message:
           raise SystemExit,message
    image = image.convert()
    if transp:
       color = image.get_at((0,0))
       image.set_colorkey(color,RLEACCEL)
    return image

# Calcular :
def area():
        cant = 0
        for a in range(6):
            m = pg.mask.from_threshold(img,colores[a],(10,10,10))
            r = m.connected_components()
            for Reg in r:
                # Saber si tiene mayor o igual a 1000 pixeles
                ar = Reg.count()
                if (ar>=1000):
                    xy = Reg.centroid()
                    pg.draw.circle(img, cBlanco, xy, 7, 1)
                    cant += 1
        print "La cantidad de imagenes son: ",cant
        ventana.blit(img,(0,0))
        pg.display.update()

def centroide():
        for a in range(6):
            m = pg.mask.from_threshold(img,colores[a],(10,10,10))
            r = m.connected_components()
            for Reg in r:
                ar = Reg.count()
                print ar
                if (ar >= 1000):
                    xy = Reg.centroid()
                    print "a: ", a, "xy: ", xy
                    pg.draw.circle(img,cBlanco,xy,7,1)   #############Modificar y poner una cruz
                    #pg.draw.line(img,cBlanco,xy)
        ventana.blit(img,(0,0))
        pg.display.update()

def contorno():
    fl = open("Contornos.txt", "w")
    for a in range(6):
        m = pg.mask.from_threshold(img,colores[a],(10,10,10))
        r = m.connected_components()
        for Reg in r:
            # Saber si tiene mayor o igual a 1000 pixeles
            ar = Reg.count()
            if (ar >= 1000):
                xy = Reg.outline()
                pg.draw.lines(img,cBlanco,True,xy,2)
                # Escribir en el archivo las cordenadas de los contornos
                color = ["Naranjo","Naranjo Claro","Rosado","Rosado Claro","Azul Claro","Verde Claro"]
                lis = str(xy)
                es = "Contorno de %s %s \n\n\n" % (color[a],lis)
                fl.write(es)
    fl.close()
    ventana.blit(img,(0,0))
    pg.display.update()

def bouding_box():
    for a in range(6):
        m = pg.mask.from_threshold(img,colores[a],(10,10,10))
        r = m.connected_components()
        for Reg in r:
            # Saber si tiene mayor o igual a 1000 pixeles
            ar = Reg.count()
            if (ar >= 1000):
                xy = Reg.get_bounding_rects()
                for j in xy:
                    l = []
                    for i in range(4):
                        l.append(j[i])
                    pg.draw.rect(img,cBlanco,l,1)
    ventana.blit(img,(0,0))
    pg.display.flip()

def menu():
    print "Calcular el area de cada figura, detectar las mayores o igual a 1.000pixeles."
    print "1) Numero de imagenes detectadas"
    print "2) El BoundingBox de cada imagen con color Blanco"
    print "3) El Contorno de cada imagen con color Blanco"
    print "Exportar cada Contorno a un archivo de texto en formato: (x0,y0),(x1,y1),(x2,y2)...(x0,y0)"



#Colores
cAzul = (0,0,255)
cVerde = (0,255,0)
cRojo = (255,0,0)
cNegro = (0,0,0)
cBlanco = (255,255,255)
cAmarillo = (255,255,0)
rgb = [cRojo,cVerde,cAzul]


#Colores de las imagenes:
cRosado = (255,0,255)
cNaranjoClaro = (255,201,14)
cNaranjo = (255,128,0)
cRosadoClaro = (255,174,201)
cAzulClaro = (0,128,255)
cVerdeClaro = (181,230,29)
colores = [cNaranjo,cNaranjoClaro,cRosado,cRosadoClaro,cAzulClaro,cVerdeClaro]



ventana = pg.display.set_mode((900,700))
img = Load_Image('figuras.png')


K = True
cont = 0
while K:
    #menu()
    #area()
    #centroide()
    if (cont == 0):
        #contorno()
        cont += 1
        #bouding_box()
        area()




