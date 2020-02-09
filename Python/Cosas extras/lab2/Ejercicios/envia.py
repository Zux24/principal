import serial, time

s = serial.Serial('COM1')

for e in range(0,14):
    s.write(chr(e))
    time.sleep(0.1)
