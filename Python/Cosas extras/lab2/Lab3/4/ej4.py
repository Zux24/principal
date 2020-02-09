import pygame as py                                       #
from pygame.locals import *                               #
nMAX = 10                                                 #
blanco = (255,255,255)                                           # defino el color negro
nImg = 0                                                  # Numero de imagenes
                                                          #
def Load_Image(sFile, transp=False):                      # funcion que carga imagen
    image = py.image.load(sFile).convert()                # agrego codigo a la funcion
    return image                                          #
                                                          #
py.init()                                                 # inicia pygame
w = py.display.set_mode((845,640))                        # inicia la ventan grafica
s = Load_Image('figuras.png')                             # carga la imagen de fondo
color = ((255,0,255),(255,201,14),(255,128,0),(255,174,201),(0,128,255),(181,230,29))
for i in range(0,6):
    clr = color[i]
    m = py.mask.from_threshold(s,clr,(10,10,10))          # busca regiones de ese color
    for Reg in m.connected_components(nMAX):              #para cada una de esas regiones
        nImg = nImg + 1                                   # Se suma una imagen detectada
        xy = Reg.centroid()                               # (a) obtengo centroides de cada region
        rectangulo = Reg.get_bounding_rects()             # (c) obtengo rectangulo del contorno de la region

        print "centroide = ", xy,                         # (a) muestro coordenadas del centroide de la region
        print " BoundingBox = ", rectangulo[0]          # (c) muestro coordenadas del rectangulo de contorno de la region
        py.draw.rect(s, blanco, rectangulo[0],2)           # (c) dibujo contorno de la region en color blanco y grosor 1
print "Cantidad de imagenes: ", nImg
                                                          #
w.blit(s,(0,0))                                           # muestro la imagen de fondo
py.display.flip()                                         # actualizo pantalla

seguir = 1                                                # agrego un ciclo de espera
while seguir:                                             # que termina
    ev = py.event.get()                                   # cuando ocurre un evento
    for e in ev:                                          # de cerrar ventana
        if e.type == QUIT: seguir = 0                     #
py.quit()                                                 # finalizo pygame
