#By Alberto Caro S
#PhD(c) Cs. Ingenieria - PUC

# File I/O Binary

import ctypes as ct

# Definicion de Tipos de Datos estilo C/C++
#----------------------------------------------------------------
class MyReg(ct.Structure):
 _fields_ = [('a',ct.c_byte),('b',ct.c_int),('c',ct.c_char*4)]
#----------------------------------------------------------------

# Escribe estructura Archivo Binario
#----------------------------------------------------------------
def PutReg(eX):
    f.write(eX)
    return
#----------------------------------------------------------------

eReg = MyReg()
aReg = [ MyReg() for i in range(10)]

f = open('datos.bin','wb')
for i in range(10):
 aReg[i].a = i
 aReg[i].b = -i*2
 aReg[i].c = 'Hola'
 PutReg(aReg[i])

f = open('datos.bin','rb')
for i in range(10):
  f.readinto(eReg)
  print eReg.a
  print eReg.b
  print eReg.c

f.close()



