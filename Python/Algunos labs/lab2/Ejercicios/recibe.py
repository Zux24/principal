import serial

s = serial.Serial('COM1')

while(True):
    nx = ord(s.read())
    print nx
    if (nx == 13):
        break
