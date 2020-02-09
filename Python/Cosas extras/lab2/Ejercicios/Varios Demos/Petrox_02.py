import serial, random as ra, time as ti

s = serial.Serial(1)
s.baudrate = 2400
t = ''
while 1:
 if ra.randint(1,3) == 1:
    t = str(ra.randint(1,4)) + ',' + 'U\n'
    s.write(t)
 if ra.randint(1,3) == 2:
    t = str(ra.randint(1,4)) + ',' + 'D\n'
    s.write(t)
 if ra.randint(1,3) == 3:
    t = str(ra.randint(1,4)) + ',' + 'N\n'
    s.write(t)
 print 'Send: ' + t
 ti.sleep(0.01)
s.close()

