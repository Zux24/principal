
#Ejercicio 1
aData = 'luna,luna,marte,jupiter,jupiter,saturno,urano,saturno,venus,luna,marte,marte,venus,urano\n'
aX = aData[:-1].split(',')
print aX
#Ejercicio 2
d = {}
for e in aData[:-1].split(','):
    if e not in d:
        d[e] = 1
    else:
        d[e] +=1
print d
#Ejercicio 3
p = [2,3,4,5,6,7,8,9,1,2,3,4]
q = [3,3,4,4,5,5,6,6,7,7,8,8]
d = [a<<1 + b for a,b in zip(p,q)]
print d
#Ejercicio 4
r = 0
s = 2
print d[r::s]
r = 1
s = 2
print d[r::s]

#Ejercicio 5
aM = [(i%2,i%3) for i in range(10)]
print aM

#Ejercicio 6
d = {'luna': 3, 'jupiter': 2, 'venus': 2, 'marte': 3, 'urano': 2, 'saturno': 2}
claves = d.keys()
print claves

#Ejercicio 7
valores = d.values()
print valores


