from pygame.locals import *
import pygame as pg, sys


#Cargar imagen
def load_img(imag, trans = False):
    try: img = pg.image.load(imag)
    except pg.error,message:
        raise SystemExit,message
    image = img.convert
    if trans:
        color = image.get_at((0,0))
        image.set_colorkey(color,RLEACCEL)
    return image

imag = 'figuras.png'
pg.init()
siz = (700,550)
pantalla = pg.display.set_mode(siz)
Img = load_img(imag)

bl = True
while bl:
    pantalla.blit(Img,(0,0))
    for event in pg.event.get():
        if event.type == pg.QUIT:
            sys.exit()
        elif event.type == pg.KEYDOWN:
            if event.key == pg.K_ESCAPE: bl = False
    pg.display.flip()