

import MySQLdb as mys  # Libreria para manejo de Base de datos

# Datos de Conexion:
db_host = 'localhost'
usuario = 'root'
clave = ''
bd = 'cajero'
#Conexion:
con = mys.connect(db_host,usuario,clave,bd)
#Abrri un cursor:
cursor = con.cursor()
#Ejecutar una consulta:
sql = ""
con.execute(sql)
con.commit()
#Obtener todos los datos hallados:
cursor.fetchall()
#o solo el primero:
cursor.fetchone()
#cerrar el cursor:
cursor.close()