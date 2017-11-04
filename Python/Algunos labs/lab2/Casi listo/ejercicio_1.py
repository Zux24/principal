import os,numpy
from PIL import Image, ImageOps, ImageFilter
from numpy import array, dot,dstack,ones,random,uint8,zeros,exp,mgrid,sqrt

#Convierte una Imagen de Array a Imagen RGB
#------------------------------------------
def Pix2Image(img,mode='RGB'):
    if img.max() > 255:
       img *= 255.0 / img.max()
    img = array(img,uint8)
    img = Image.fromarray(img,mode)
    return img

#Convierte una Imagen RGB a un Array
#------------------------------------------
def Image2Pix(img):
    i = img.convert('RGB')
    w,h = i.size
    data = i.getdata()
    img = array(data,float)
    img = img.reshape((h,w,3))
    return img

#Aplica una Transformacion Lineal sobre RGB
#------------------------------------------
def MaskImg(img,ind):
    aT = array([#  %R   %G   %B
                [0.00,0.00,0.00], # Canal RED
                [0.00,0.00,0.00], # Canal GREEN
                [0.00,0.00,0.00]  # Canal BLUE
               ])

    if (ind =="Red"): aT[0][0] = 1.00
    elif (ind == "Green"): aT[1][1] = 1.00
    elif (ind == "Blue"): aT[2][2] = 1.00
    img = dot(img,aT)
    return Pix2Image(img)

cl = ["Red","Green","Blue"]
for i in cl:
    #Crear ruta para archivos azules:
    if not os.path.exists("Imagenes/%s"%(i)): os.makedirs("Imagenes/%s"%(i))

lis = [filename for filename in os.listdir('Imagenes/')]


for filename in lis:
    sFile = "Imagenes/"+filename
    for c in cl:
        i = Image.open(sFile)
        j = Image2Pix(i)
        k = MaskImg(j,c)
        k.save("Imagenes/%s/%s"%(c,filename))



'''

img = Image.open("cielo.jpg")
gris = ImageOps.grayscale(img)
negado = ImageOps.invert(img)
negado.show()
negado.save("cielonegado.jpg")
gris.save("cielogris.jpg")
blue = ImageOps.colorize(img,(0,0,0),(0,100,200))

Original     gris    negado
    rojo        verde   azul'''

#ImageOps.invert(img) #Negacion
#img.filter(ImageFilter.BLUR) # desenfocar
#img.convert("L") # blanco y negro
#img.mode # ver formato
#img.show()  # Ver imagen
#img.save("Nuevo nombre.formato") # Guardar imagen
#img.size #tamano de la imagen


#for filename in os.listdir("Imagenes/*.*"):













