import time as ti, random as ra, serial

END = '\n'

s = serial.Serial(1) # Monitoreo con Web Server + Serial
s.baudrate =  2400

t = ''
while 1:
 t = ''
 aData = [ra.randint(-10000,10000) for i in range(8)]
 for e in aData:
  t += str(e) + ','
 t += END
 s.write(t)
 ti.sleep(0.250)
s.close()