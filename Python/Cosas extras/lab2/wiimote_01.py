import numpy , random as ra
from numpy import array, matrix

from pygame.locals import *
import pygame as py

nMIN_X1 = 30 ; nMAX_X1 = 575 ; nMIN_Y1 = 90; nMAX_Y1 = 775
nCLR_X1 = 520 ; nCLR_X2 = 570 ; nCLR_Y1 = 30; nCLR_Y2 = 70

class Mapper(object):

    def __init__(self,((IR_x1,IR_y1),(IR_x2,IR_y2),(IR_x3,IR_y3),(IR_x4,IR_y4)),\
                      ((SC_x1,SC_y1),(SC_x2,SC_y2),(SC_x3,SC_y3),(SC_x4,SC_y4))):

        A = array([
                   [IR_x1,IR_y1,1,0,0,0,-SC_x1*IR_x1,-SC_x1*IR_y1],
                   [0,0,0,IR_x1,IR_y1,1,-SC_y1*IR_x1,-SC_y1*IR_y1],
                   [IR_x2,IR_y2,1,0,0,0,-SC_x2*IR_x2,-SC_x2*IR_y2],
                   [0,0,0,IR_x2,IR_y2,1,-SC_y2*IR_x2,-SC_y2*IR_y2],
                   [IR_x3,IR_y3,1,0,0,0,-SC_x3*IR_x3,-SC_x3*IR_y3],
                   [0,0,0,IR_x3,IR_y3,1,-SC_y3*IR_x3,-SC_y3*IR_y3],
                   [IR_x4,IR_y4,1,0,0,0,-SC_x4*IR_x4,-SC_x4*IR_y4],
                   [0,0,0,IR_x4,IR_y4,1,-SC_y4*IR_x4,-SC_y4*IR_y4]
                  ])

        XP = array([SC_x1,SC_y1,SC_x2,SC_y2,SC_x3,SC_y3,SC_x4,SC_y4])
        p = numpy.linalg.solve(A,XP)
        self.H = matrix([
                         [ p[0],p[1],p[2] ],
                         [ p[3],p[4],p[5] ],
                         [ p[6],p[7],  1  ]
                        ])

    def Mapea(self,(x,y)):
        pt = [ [x],[y],[1] ]
        re = self.H * pt
        ze = re[2,0]
        return re[0,0]/ze,re[1,0]/ze

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
# Pinta y Mapea los (X,Y) IR a (X,Y) PC
#---------------------------------------------------------------------
def Pinta_IR(mx,my,xp,yp):
    if mx > nMIN_X1 and mx < nMAX_X1:
       if my > nMIN_Y1 and my < nMAX_Y1:
          sc.blit(f2,(mx,my))
          sc.blit(f3,(xp,yp))
    return

#---------------------------------------------------------------------
# Dibuja y Mapea los (X,Y) IR a (X,Y) PC
#---------------------------------------------------------------------
def Draw_IR(mx,my,xp,yp):
    if mx > nMIN_X1 and mx < nMAX_X1:
       if my > nMIN_Y1 and my < nMAX_Y1:
          if py.mouse.get_pressed()[0]:
             py.draw.circle(P2,(0,0,255),[mx,my],3)
             py.draw.circle(P2,(255,0,0),[int(xp),int(yp)],3)

    if mx > nCLR_X1 and mx < nCLR_X2:
       if my > nCLR_Y1 and my < nCLR_Y2:
          P2.blit(P1,(0,0))

    return

#---------------------------------------------------------------------
# Main
#---------------------------------------------------------------------
py.init()
size = (1600,800)
sc = py.display.set_mode(size)
py.display.set_caption("Homography Demo. By Alberto Caro.-")
P1 = Load_Image('panel.png');P2 = Load_Image('panel.png')
f1 = Load_Image('logo.png', True)
f2 = Load_Image('abeja.png',True)
lOK = True
wi = Mapper(
            ((30,90 ),(575,90  ),(575,775 ),(30,775 )),
            ((600,90),(1568,390),(1568,475),(600,775))
			)
while lOK:
 Mx,My = py.mouse.get_pos()
 Xp,Yp = wi.Mapea((Mx,My))
 for e in py.event.get():
  if e.type == py.QUIT: lOK = False
 sc.blit(P2,(0,0))
 Draw_IR(Mx,My,Xp,Yp)
 py.display.flip()
py.quit()
