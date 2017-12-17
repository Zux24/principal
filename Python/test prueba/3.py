
a = [2,5,7,9,6,7,3,5]
b = [5,8,7,2,4,6,1,3]
c = [3,5,4,1,6,7,8,1]
x = [1,2,3,4,5,6,7,8]

for x in range(8):  #toma el valor del 1 al 8
    vA = a[x]
    print vA
    vB = b[x]
    print vB
    vC = c[x]
    print vC
    print "----------------------------------------------"
    funcion = (a[x]*(x^2))+(b[x]*x)+c[x]
    print funcion
    print "----------------------------------------------"
