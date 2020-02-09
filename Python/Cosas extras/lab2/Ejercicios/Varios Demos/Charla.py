# By Alberto Caro S.Alberto
# PhD(c) Cs. de la Computacion - PUC
#-----------------------------------

# Tutorial de funciones Random()
#--------------------------------
# Funciones: import random as ra
#----------
# 1.- ra.seed()
# 2.- ra.randint(a,b)
# 3.- ra.choice(Array)
# 4.- ra.random()
# 5.- ra.uniform(a,b)
# 6.- ra.shuffle(Array)
# 7.- ra.sample(Array,K) -> Ejmplo del Kino
# 8.- ra.gauss(mu,ds)


# Tutorial de funciones Time()
#--------------------------------
# Funciones: import time as ti
#----------
# ti.sleep()
# ti.time()
# ti.asctime()
# ti.ctime()


# Tutorial de funciones Archivos
#--------------------------------
# Funciones: import ctypes as ct, structure
#----------
# open()
# close()
# read()
# write()
# write(eReg)
# readinto(eReg)
# readline()
# readlines()

#-------------------------------------
# ctypes:
#-------------------------------------
#c_bool(1)       _Bool
#c_char(1)       char	
#c_byte(1)       char	
#c_ubyte(1)      unsigned char	
#c_short(2)      short int
#c_ushort(2)     unsigned short
#c_int(4)	       int	
#c_uint(4)       unsigned int
#c_long(4)       long	
#c_ulong(4)      unsigned long	
#c_longlong(8)   __int64
#c_ulonglong(8)  unsigned __int64
#c_float(4)      float
#c_double(8)     double	
#c_longdouble(8) long double	
#c_char_p(4)     char * 	
#-----------------------------------

class eReg(ct.Structure):
 _fields_ = [('a',ct.c_ubyte),('b',ct.c_int),('c',ct.c_char*4)]

e = eReg()
