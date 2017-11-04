from Tkinter import *
from PIL import Image, ImageTk

app = Tk()
app.title("Aplicacion grafica en python")
imagen = ImageTk.PhotoImage(Image.open("cielo.jpg"),size="500x200")
imagen1 = Label(app,image=imagen,anchor="center")
etiqueta =Label(app, text="Visor de Imagenes", height=1, relief="raised", borderwidth=3)



def cNext():
    print "Next"

def cPrevius():
    print "Previus"

def cClose():
    app.destroy()

#Botones
next = Button(app, text="Next",width=3, height=2,anchor="sw", command = cNext)
previus = Button(app, text="Previus",width=3, height=2,anchor="sw",command = cPrevius)
close = Button(app, text="Close",width=3, height=2,anchor="sw",command = cClose)


original = Button(app, text="Original",anchor="center",width=20, height=10)
gris = Button(app, text="Gris",anchor="center",width=20, height=10)
negativo = Button(app, text="Negativo",anchor="center",width=20, height=10)

rojo = Button(app, text="Rojo",anchor="center",width=20, height=10)
verde = Button(app, text="Verde",anchor="center",width=20, height=10)
azul = Button(app, text="Azul",anchor="center",width=20, height=10)


imagen1.pack(side=TOP,fill=BOTH,expand=True,padx=10, pady=5)
etiqueta.pack()

original.pack()
gris.pack()
negativo.pack()
rojo.pack()
verde.pack()
azul.pack()



next.pack()
previus.pack()
close.pack()
app.geometry("800x600")
app.mainloop()