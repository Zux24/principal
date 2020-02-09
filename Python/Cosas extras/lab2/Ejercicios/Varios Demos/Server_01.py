import serial

s = serial.Serial(1)
s.baudrate = 2400
while 1:
 t = s.readline()[:-1].split(',')
 print t
s.close()
