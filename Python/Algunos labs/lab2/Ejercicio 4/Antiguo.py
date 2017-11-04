from pygame.locals import *
import pygame as pg

def Iinicio_pygame():
    pg.init()
    pg.display.set_caption("Programacion II: Proyecto Final")
    ventana = pg.display.set_mode((700,550))
    return ventana

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

def area(img,ventana):
    K = 1
    while K:
        for event in pg.event.get():
            if event.type == pg.QUIT:
                K = False
        for a in range(3):
            m = pg.mask.from_threshold(img,rgb[a],(10,10,10))
            r = m.connected_components()
            for Reg in r:
                ar = str(Reg.count())
                xy = Reg.centroid()
                font = pg.font.Font(None,15)
                text = font.render(ar,0,(0,0,0))
                ventana.blit(text,xy)
        pg.display.flip()


def menu():
    #op = raw_input("Ingrese opcion: ")

    #if (op == "1"):
    area(img,(ventana))

#Colores
cAzul = (0,0,255)
cVerde = (0,255,0)
cRojo = (255,0,0)
cNegro = (0,0,0)
cBlanco = (255,255,255)
cAmarillo = (255,255,0)
rgb = [cRojo,cVerde,cAzul]

ventana = Iinicio_pygame()
img = Load_Image('figurass.png')

bl = True
k = True
while k:
    menu()
    for event in pg.event.get():
        if event.type == pg.QUIT:
            K = False
