import time as ti, random as ra, serial

sNL  = '\n'
sEOT = '@'

s = serial.Serial("COM1")
s.baudrate =  9600

aData = [i for i in range(10)]
aData.append('@')

for Dato in aData:
 sL = str(Dato) + sNL
 s.write( sL )
 ti.sleep(0.01)
s.close()

