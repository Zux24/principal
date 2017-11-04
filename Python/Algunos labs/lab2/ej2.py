import pygame as py
from pygame.locals import *
import random as ra

#---------------------------------------------------------------------
# Carga imagenes y convierte formato pygame
#---------------------------------------------------------------------

def Load_Image(sFile,transp=False):
    try: image = py.image.load(sFile)
    except py.error,message:
           raise SystemExit,message
    image = image.convert()
    if transp:
       color = image.get_at((0,0))
       image.set_colorkey(color,RLEACCEL)
    return image

def Figura_Grande(clr,nMaxR,s):
    lOk = 1
    while lOk:
        ev = py.event.get()
        for e in ev:
            if e.type == QUIT:
                lOk = 0
        m = py.mask.from_threshold(s,clr,(10,10,10))
        r = m.connected_components(nMaxR)
        if(not r):
            nMaxR=nMaxR-1000
            for Reg in m.connected_components(nMaxR):
                xy = Reg.centroid()
                py.draw.circle(s,(0,0,0),xy,55,2)
                w.blit(s,(0,0))
        #w.blit(Reg,(0,400))
        py.display.flip()

#Colores
cAzul = (0,0,255)
cVerde = (0,255,0)
cRojo = (255,0,0)
cNegro = (0,0,0)
cBlanco = (255,255,255)
cAmarillo = (255,255,0)
rgb = [cRojo,cVerde,cAzul]

py.init()
w = py.display.set_mode((640,480))
s = Load_Image('figurass.png')
nMax = 15000

while(True):

    print "----------Seleccione una Opcion----------"
    print "1 > Centro de Masa Objeto mas Grande Rojo"
    print "2 > Centro de Masa Objeto mas Grande Verde"
    print "3 > Centro de Masa Objeto mas Grande Azul"
    print "4 > Centro de Masa Objeto mas Grande Amarillo\n"

    op = int(raw_input('Ingrese Opcion: '))
    if(op==1):
        Figura_Grande((255,0,0),nMax,s)
    elif(op==2):
        Figura_Grande((0,255,0),nMax,s)
    elif(op==3):
        Figura_Grande((0,0,255),nMax,s)
    elif(op==4):
        Figura_Grande((255,255,0),nMax,s)

    else:
        print "--------OPCION INVALIDA--------"
        break







