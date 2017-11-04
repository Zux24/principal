# By Alberto Caro S.
# Ing. Civil Computacion
# Dr.(c) Cs. de la Computacion
# Pontificia Universidad Catolica de Chile
#-------------------------------------------
import pygame, time, random as RA, serial
from pygame.locals import *

#---------------------------------------------------------------------
# Carga imagenes y convierte formato pygame
#---------------------------------------------------------------------
def Load_Image(sFile,transp=False):
    try: image = pygame.image.load(sFile)
    except pygame.error,message:
           raise SystemExit,message
    image = image.convert()
    if transp:
       color = image.get_at((0,0))
       image.set_colorkey(color,RLEACCEL)
    return image

#---------------------------------------------------------------------
# Pinta las Temperaturas a Pantalla
#---------------------------------------------------------------------
def Pinta_Data():
    sc.blit(Img,(0,0))
    nDX = 15; nDY = 39 ; nX = 0 ; nRGB = (0,0,0)
    for nT in aT:
     if nT < 10: nRGB = (0,0,255)
     if nT >= 10 and nT <= 25: nRGB = (0,255,0)
     if nT > 25: nRGB = (255,0,0)
     pygame.draw.line(sc,nRGB,(nX+nDX,nDY*4),(nX+nDX,(nDY-nT)*4),10)
     nX = nX + 12
    for nX in range(0,29):
     aT[nX] = aT[nX+1]
    return

#---------------------------------------------------------------------
# Imprime Cabezara del Archivo.-
#---------------------------------------------------------------------
def nFh_Head():
 nFh.write(' Data Logger de Temperaturas ' + '\n' )
 nFh.write('-----------------------------' + '\n' )
 nFh.write('Fecha: 06-04-2011'             + '\n' )
 nFh.write('Temperaturas.................' + '\n' )
 nFh.write('-----------------------------' + '\n' )
 return

#---------------------------------------------------------------------
# Main.-
#---------------------------------------------------------------------
s = serial.Serial(1)
s.baudrate = 2400
nRes = (475,165)
nFh = open('tempe.txt','w')
aT = [ 0 for i in range(30) ] # 30 Samples.-
pygame.init()
sc = pygame.display.set_mode(nRes)
Img = Load_Image('base.jpg')
nFh_Head()
Done = True
while Done:
 Data = int(s.readline()[:-1])
 aT[29] = Data
 if Data > 28: pygame.image.save(sc,'warnig.png')
 ev = pygame.event.get()
 for e in ev:
  if e.type == QUIT: Done = False
 Pinta_Data()
 nFh.write(str(Data) + '\n' )
 pygame.display.flip()
nFh.write('---------[EOF]---------' + '\n' )
ser.close()
nFh.close()












