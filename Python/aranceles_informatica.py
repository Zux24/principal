
matriz = []

texto = ["Tipo de Institucion: ","Nombre de Institucion: ","Nombre Sede: ",
         "Nombre Carrera: ","Tipo de Jornada: ","Arancel Anual: "]

def main(matriz):
    n = 3
    f = n
    c = 3
    for f in range(n):
        matriz.append([0] * c)

    print ("Llenar matriz\n")
    for fila in range(0, n):
        for columna in range(0, c):
            # Tipo de Casa de Estudio:
            tipo = str(raw_input(""))
            matriz[fila][columna] = tipo
            # Nombre Institucion
            nombre = str(raw_input())
            matriz[fila][columna] = nombre
            # Nombre Sede
            sede = str(raw_input())
            matriz[fila][columna] = sede
            # Nombre Carrera
            carrera = str(raw_input())
            matriz[fila][columna] = carrera
            # Jornada
            jornada = str(raw_input())
            matriz[fila][columna] = jornada
            # Arancel anual
            arancel_anual = int(raw_input())
            matriz[fila][columna] = arancel_anual
            # Arancel de referencia:
            arancel_referencial = int(raw_input("Arancel de Referencia: "))
            matriz[fila][columna] = arancel_referencial
    for a in matriz:
        print (a)

main(matriz)