import os,numpy,sqlite3 as sq,serial,time as ti
from PIL import Image
from numpy import array, dot,uint8

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

cl = ["Red","Green","Blue","Gris","Negada"]
lis = [filename for filename in os.listdir('Imagenes/')]
'''
for i in cl:
    #Crear ruta para archivos azules:
    if not os.path.exists("Imagenes/%s"%(i)): os.makedirs("Imagenes/%s"%(i))




for filename in lis:
    sFile = "Imagenes/"+filename
    for c in cl:
        i = Image.open(sFile)
        if (c=="Gris"): k = ImageOps.grayscale(i)
        elif (c == "Negada"): k =ImageOps.invert(i)
        else:
            j = Image2Pix(i)
            k = MaskImg(j,c)
        k.save("Imagenes/%s/%s"%(c,filename))
'''
s = serial.Serial("COM1")
s.baudrate =  9600

aData = []
sNL  = '\n'

for filename in lis:
    sFile = "Imagenes/"+filename
    nFh = open(sFile,'r')
    imgData = nFh.read()
    imgData = sq.Binary(imgData)
    aData.append(imgData)
    nFh.close()
aData.append('@')

for Dato in aData:
 sL = str(Dato) + sNL
 s.write( sL )
 ti.sleep(0.01)
s.close()


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













