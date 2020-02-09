#By Alberto Caro
#----------------
from PIL import Image
from matplotlib import pyplot
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
def MaskImg(img):
    aT = array([#  %R   %G   %B
                [0.00,1.00,0.00], # Canal RED
                [0.00,0.00,0.00], # Canal GREEN
                [0.00,0.00,0.00]  # Canal BLUE
               ])
    img = dot(img,aT)
    return Pix2Image(img)

i = Image.open('cell_01.jpg')
#i2 = i.convert('L')
j = Image2Pix(i)
k = MaskImg(j)
k.show()

#i2.show()

#g = k.mean(axis=2)
#v = g.flatten().tolist()
#pyplot.hist(v,256)
#pyplot.show()


