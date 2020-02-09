import serial

s = serial.Serial(1)
s.baudrate = 2400
ns = 0
while 1:
 t = s.readline()[:-1]
 if t == '@':
    break
 else:
    print t
    ns += int(t)
print 'Total-> ' + str(ns)
s.close()