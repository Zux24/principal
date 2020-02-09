from PIL import Image

FLAG = '^__^'

img = Image.open("cielo.jpg")
img_pix = img.convert('HVS')

