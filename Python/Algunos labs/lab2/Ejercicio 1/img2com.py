
import os,serial, time as ti
from PIL import Image, ImageOps
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



cl = ["Red","Green","Blue","Gris","Negada"]
for i in cl:
    #Crear ruta para archivos azules:
    if not os.path.exists("Imagenes/%s"%(i)): os.makedirs("Imagenes/%s"%(i))

lis = [filename for filename in os.listdir('Imagenes/')]

#Conexion:
s = serial.Serial("COM1")
s.baudrate = 9600 # 9600 Bps, 8N1

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



