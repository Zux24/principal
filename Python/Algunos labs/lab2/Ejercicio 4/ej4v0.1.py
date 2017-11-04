
from pygame.locals import *
import pygame as pg, sys

#iniciar pygame
def Inicio_pygame():
    pg.init()
    pg.display.set_caption("Ejercicio 4 - Laboratorio 3")
    pg.display.set_mode((700,550))
    return

#Cargar imagen
def load_img():
    trans = False
    try: img = pg.image.load("figuras.png")
    except pg.error,message:
        raise SystemExit,message
    img = img.convert
    if trans:
        color = img.get_at((0,0))
        img.set_colorkey(color,RLEACCEL)
    return img

# Calcular el area:
def area(img):
        for a in range(5):
            m = pg.mask.from_threshold(img,colores[a],(10,10,10))
            r = m.connected_components()
            for Reg in r:
                area = str(Reg.count())
                xy = Reg.centroid()
                f = pg.font.Font(None,15)
                t = f.render(area,0,(0,0,0))
                ventana.blit(t,xy)
        pg.display.update()

def centroide():
        for a in range(5):
            m = pg.mask.from_threshold(img,colores[a],(10,10,10))
            r = m.connected_components()
            for Reg in r:
                xy = Reg.centroid()
                pg.draw.circle(img,cBlanco,xy,5,1)
        ventana.blit(img,(0,0))
        pg.display.update()

def contorno():
    for a in range(5):
        m = pg.mask.from_threshold(img, colores[a], (10, 10, 10))
        r = m.connected_components()
        for Reg in r:
            xy = Reg.outline()
            pg.draw.lines(img,cNegro,True,xy,2)
    ventana.blit(img,(0,0))
    pg.display.update()

def bouding_box():
    for a in range(5):
        m = pg.mask.from_threshold(img, colores[a], (10, 10, 10))
        r = m.connected_components()
        for Reg in r:
            xy = Reg.outline()
            aux = xy
            for a in xy:
                l = []
                for i in range(4):
                    l.append(a[i])
                pg.draw.rect(img,cBlanco,1,2)
    ventana.blit(img,(0,0))
    pg.display.flip()

def menu():
    op = raw_input("Ingresar opcion:  ")
    if (op == 1):
        area()
    elif (op == 2):
        centroide()
    elif (op == 3):
        contorno()
    elif (op == 4):
        bouding_box()
    else:
        "Error al ingresar opcion, intentar de nuevo."


#Colores
cAzul = (0,0,255)
cVerde = (0,255,0)
cRojo = (255,0,0)
cNegro = (0,0,0)
cBlanco = (255,255,255)

cRosado = (255,0,255)
cNaranjoClaro = (255,201,14)
cNaranjo = (255,128,0)
cRosadoClaro = (255,174,201)
cAzulClaro = (0,128,255)
cVerdeClaro = (181,230,29)



colores = [cNaranjo,cNaranjoClaro,cRosado,cAzulClaro,cVerdeClaro]
rgb = [cRojo,cVerde,cAzul]


bl = True


print "1) Calcular el area de cada region de la imagen"
print "2) Dibujar el centroide de cada region de color blanco"
print "3) Dibujar el contorno de todas las regiones de color negro"
print "4) Dibujar el bouding box de cada region con color amarrillo"

while bl:
    ventana = Inicio_pygame()
    img = load_img()
    area(img)
    for event in pg.event.get():
        if event.type == pg.QUIT:
            sys.exit()
        elif event.type == pg.KEYDOWN:
            if event.key == pg.K_ESCAPE:
                bl = False


