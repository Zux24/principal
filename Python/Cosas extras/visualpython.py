def Robo_move():
    for i in range(nMax_ROBOTS):
        aRobots[i].nTime -= 1
        if aRobots[i].nTime <= 0:
            aRobots[i].nTime = 100 #ra.radint(10,100)
            #Lanzamos la Pelota
        aRobots[i].nStep -= 1
        if aRobots[i].nStep <= 0: Robot_Init(i)
        aRobots[i].pos.x = += aRobots[i].nPryX ; aRobots[i].pos.z += aRobots[i].nPryz
        Check_Out(i)
    return

# Calcula distancia Euclidiana de los Robots a ambos Aros
def Robots_Dist():
    aDEaD = [0.0,0.0,0.0,0.0] ; aDEaI = [0.0,0.0,0.0,0.0]
    for i range(nMAX_ROBOTS):
        aDEaD[i] = math.sqrt((MyViD.posx - aRobots[i].pos.x)**2 + (MyViD.pos.z - aRobots[i].pos.z)**2)
        aDEaI =  math.sqrt((MyViI.posx - aRobots[i].pos.x)**2 + (MyViI.pos.z - aRobots[i].pos.z)**2)
    return aDEaD,aDEaI

# Definicion del mundo 3D y sus Objetos

scene = display(title='Demo',x=50,y=0,width=1900,height=600,center=(0,0,0),background=(0,0,0))
MyMap = box(pos=(0,0,0),size=(1800,3,1000),color=color.red)
MyBas = box(pos=(0,2,0),size=(1780,5,980),color=color.gris(0.5))
MyLin = box(pos=(0,4,0),size=(3,3,1000),color=color.white)

MyBoD = box(pos=(900,150,0),size=(3,70,140),color=color.blue)
MyViD = box(pos=(900,60,0),size=(3,120,6),color=color.red)
MyArD = ring(pos=(880,130,0),radius=15,color=color.white,axis=(0,4,0),thickness=2)

MyBoI = box(pos=(-900,150,0),size=(3,70,140),color=color.blue)
MyViI = box(pos=(-900,60,0),size=(3,120,6),color=color.red)
MyArI = ring(pos=(-880,130,0),radius=15,color=color.white, axis=(0,4,0),thickness=2)

MyCir = cylinder(pos=(0,0,0),radius=50,color=color.white, axis=(0,6,0),opacity=1)

Rob_1 = cylinder(pos=(0,1,0),radius=15,color=color.blue, axis=(0,15,0),opacity=1)
Rob_2 = cylinder(pos=(100,1,0),radius=15,color=color.green, axis=(0,15,0),opacity=1)
Rob_3 = cylinder(pos=(0,1,100),radius=15,color=color.yellow, axis=(0,15,0),opacity=1)
Rob_4 = cylinder(pos=(200,1,0),radius=15,color=color.cyan, axis=(0,15,0),opacity=1)
Rob_5 = cylinder(pos=(0,1,300),radius=15,color=color.red, axis=(0,15,0),opacity=1)

f.frame()
box(frame=f,pos=(-800,80,0),size=(40,160,40),color=color.blue)
box(frame=f,pos=(-720,180,0),size=(200,40,40),color=color.red)

g = frame(pos=(-700,1,300))
cylinder(frame=g,pos=(-700,1,300),radius=100,color=color.blue, axis=(0,30,0),opacity=1)
cylinder(frame=g,pos=(-700,30,300),radius=10,color=color.white, axis=(0,10,0),opacity=1)








