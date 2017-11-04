# By Alberto Caro S.
# Ing. Civil en Computacion
# Doctor(c) Cs. de la Computacion
# Pontificia Universidad Catolica de Chile
#-------------------------------------------
import pygame,ctypes as ct, random as ra, time as ti
from pygame.locals import *

#---------------------------------------------------------------------
# Definicion de Constantes.-
#---------------------------------------------------------------------
nRES = (363,550) ; lOK = True     ; nPAUSA   = 20
nNIVEL_0 = 509   ; nNIVEL_1 = 369 ; nNIVEL_2 = 229 ; nNIVEL_3 = 89

#---------------------------------------------------------------------
# Definicion de Estructura de Datos del Robot Ascensor.-
#---------------------------------------------------------------------
class eRobot(ct.Structure):
 _fields_ = [('nX',ct.c_short), # Pos X del Robot.-
             ('nY',ct.c_short), # Pos Y del Robot.-
             ('nD',ct.c_short), # Nivel de Destino.-
             ('nI',ct.c_short), # Direc: -1: Sube, +1: Baja, +0: Stop
             ('nT',ct.c_short)  # Time de espera.-
            ]

#---------------------------------------------------------------------
# Carga imagenes y convierte formato PyGame
#---------------------------------------------------------------------
def Load_Image(sFile,transp = False):
    try: image = pygame.image.load(sFile)
    except pygame.error,message:
           raise SystemExit,message
    image = image.convert()
    if transp:
       color = image.get_at((0,0))
       image.set_colorkey(color,RLEACCEL)
    return image

#---------------------------------------------------------------------
# Inicializa PyGames.-
#---------------------------------------------------------------------
def PyGame_Init():
    pygame.init()
    pygame.display.set_caption('Simulacion Planta Quimica - By Alberto Caro - 2015()')
    return pygame.display.set_mode(nRES)

#---------------------------------------------------------------------
# Inicializa Array de Figuras.-
#---------------------------------------------------------------------
def Fig_Init():
    aImg = []
    aImg.append(Load_Image('torre.png',False ))
    aImg.append(Load_Image('robot.png',True  ))
    return aImg

#---------------------------------------------------------------------
# Inicilaiza parametros del Robot Ascensor
#---------------------------------------------------------------------
def Robot_Init():
    aRobot[0].nX = 23
    aRobot[0].nY = 500
    aRobot[0].nD = ra.randint(1,3) # Niveles 1,2 o 3.-
    aRobot[0].nI = -1              # Sube
    aRobot[0].nT = nPAUSA
    return

#---------------------------------------------------------------------
# Pinta Torre
#---------------------------------------------------------------------
def Pinta_Torre():
    Panta.blit(aSprt[0],(0,0))
    return

#---------------------------------------------------------------------
# Pinta Robot Ascensor
#---------------------------------------------------------------------
def Pinta_Robot():
    Panta.blit(aSprt[1],(aRobot[0].nX,aRobot[0].nY))
    return

#---------------------------------------------------------------------
# UpDate Robot Ascensor
#---------------------------------------------------------------------
def nNivel():
    if aRobot[0].nY == nNIVEL_0: return 0
    if aRobot[0].nY == nNIVEL_1: return 1
    if aRobot[0].nY == nNIVEL_2: return 2
    if aRobot[0].nY == nNIVEL_3: return 3
#---------------------------------------------------------------------
# UpDate Robot Ascensor
#---------------------------------------------------------------------
def UpDate_Robot():
    if aRobot[0].nD == nNivel():
       ti.sleep(1)
       nAux = ra.randint(0,3)
       while nAux == aRobot[0].nD:
        nAux = ra.randint(0,3)
       # nNewDest = ra.randint(0,3) # Niveles 0,1,2 o 3.-
       nNewDest = nAux
       if aRobot[0].nD > nNewDest:
          aRobot[0].nI = +1 # Ascensor Baja.-
       if aRobot[0].nD < nNewDest:
          aRobot[0].nI = -1 # Ascensor Sube.-
       if aRobot[0].nD == nNewDest:
          aRobot[0].nI = 0 # Ascensor Detenido.-
       aRobot[0].nD = nNewDest # Asignamos nuevo Nivel.-
    else:
         aRobot[0].nT -= 1
         if aRobot[0].nT == 0:
            aRobot[0].nY += aRobot[0].nI
            aRobot[0].nT = nPAUSA
    return

#---------------------------------------------------------------------
# While Principal del Demo.-
#---------------------------------------------------------------------
Panta  = PyGame_Init()
aRobot = [ eRobot() ]
aSprt  = Fig_Init()
Robot_Init()
while lOK:
 cKey = pygame.key.get_pressed()
 if cKey[pygame.K_ESCAPE]: lOK = False
 ev = pygame.event.get()
 for e in ev:
  if e.type == QUIT: lOK = False
 Pinta_Torre()
 Pinta_Robot()
 UpDate_Robot()
 pygame.display.flip()
pygame.quit
s.close()


