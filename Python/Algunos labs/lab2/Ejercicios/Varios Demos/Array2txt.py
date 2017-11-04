'''
import time as ti, random as ra, serial

sNL  = '\n'
sL = ''
f = open('s.txt','w')
for i in range(1000):
 aD = [ra.randint(-65000,65000) for i in range(10)]
 for e in aD:
  sL += str(e) + ','
 sL += sNL
 f.write(sL)
 sL = ''
f.close()
'''
t = []

f = open('s.txt','r')
d = f.readlines()
for e in d:
 t.append(e[:-2].split(','))

print t

for i in t:
 print int(i[0]) + int(i[1])