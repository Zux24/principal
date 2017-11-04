#By Alberto Caro S
#PhD(c) Cs. Ingenieria - PUC

import random as RA
import time, ctypes

#----------------------------------------------------------------------
class eReg(ctypes.Structure):
 _fields_ = [('s1',ctypes.c_ushort),('s2',ctypes.c_ushort),('s3',ctypes.c_ushort),]

#----------------------------------------------------------------------
def Get_T(nS):
 if nS == 0:
    return RA.randint(3,7)  # Tiempo Lluvioso -> Temperaturas Bajas.-
 else:
    return RA.randint(18,30)# Tiempo Soleado  -> Temperatuars Altas.-

#----------------------------------------------------------------------
def Put( xReg ):
 nFh.write(xReg)
 return

#----------------------------------------------------------------------
N =  10

X = [ 0 for v in range(N) ]
p = [0.5, 0.5]    # Distribucion Inicial

T = [ # Nu  So
     [ 0.2, 0.8 ],# Estado E0 = Nublado
     [ 0.3, 0.7 ] # Estado E1 = Soleado
    ]

U = [ RA.random() for v in range(N) ] # Distribucion Random

nFh = open('tempe.dat','wb')
MyReg = eReg()

#Generando pronosticos segun cadena markov....
for t in range(N):
 X[t] = 0*( U[t] <= p[0] ) + 1*( U[t] > p[0] )
 p = T[X[t]][:]

print X # Mostramos Prediccion

for v in X:
 if v == 0: print ' L ',
 else: print ' S ',

print

for t in range(N):
 MyReg.s1 = Get_T(X[t]) # Asignamos Tempe segun el Clima!
 MyReg.s2 = Get_T(X[t]) # Asignamos Tempe segun el Clima!
 MyReg.s3 = Get_T(X[t]) # Asignamos Tempe segun el Clima!
 print MyReg.s1,MyReg.s2,MyReg.s3
 Put(MyReg) # Ponemos el dato!
nFh.close() # Matamos el Archivo Binario!

'''
nFh = open('tempe.dat','rb')
for t in range(N):
 nFh.readinto(MyReg) # Leemos Tempe!
 print MyReg.s1,MyReg.s2,MyReg.s3

nFh.close() # Matamos el Archivo Binario!
'''



