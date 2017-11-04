import serial, random as ra, time as ti

s = serial.Serial(1)
s.baudrate = 2400
t = ''
while 1:
 t = str(ra.randint(3,30)) + '\n'
 s.write(t)
 ti.sleep(0.100)
s.close()