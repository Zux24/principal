import pygame as py
from pygame.locals import *
import random as ra

nMAX = 3000
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

#---------------------------------------------------------------------
# Main.-
#---------------------------------------------------------------------
py.init()
w = py.display.set_mode((640,480))
s = Load_Image('figuras.png')
p = py.Surface((200,200))
clr = (0,255,0);lOk = 1
while lOk:
 ev = py.event.get()
 for e in ev:
  if e.type == QUIT:
     lOk = 0
 mask = py.mask.from_threshold(s,clr,(10,10,10))
 conx = mask.connected_component()
 nPix = conx.count()
 lp = conx.outline()
 print nPix,lp
 xy = conx.centroid()
 py.draw.circle(s,(0,0xff,0),xy,50,1)
 w.blit(s,(0,0))
 py.display.flip()


#w.blit(Reg,(0,400))
#ncon = conx.count()
#lp = conx.outline(1)
#print lp
#xy = conx.centroid()
#py.draw.circle(s,(0,0xff,0),xy,50,1)
#print xy
# for Reg in m.connected_components(nMAX):
#  xy = Reg.centroid()
#  py.draw.circle(s,(0,0xff,0),xy,50,1)
