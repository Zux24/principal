from Tkinter import *
from Tkinter import Tk
from PIL import Image, ImageTk

fram = Frame()

app = Tk()
app.title("Bienvenido al Visor de Imagenes")
img = Image.open("cielo.jpg")
rimg = img.resize((150,150))
head = Label(app,text="Visor de Imagenes")

imagen = ImageTk.PhotoImage(rimg)
imagen1 = Label(app,image=imagen,anchor="center")


imagen1.grid(row=1,column=0)
head.grid(row=0,column=1)
app.geometry("800x600")
app.mainloop()