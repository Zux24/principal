from struct import pack
from math import sin, pi
import wave,random

SAMPLE_RATE = 44100

# Genera Mono Tones
wv = wave.open('sm.wav', 'w')
wv.setparams((1,2,SAMPLE_RATE,0,'NONE','not compressed'))
Volu = int(2**15-1.0)/1 # Volumen = Amplitude 1/2 Volumen...
Data = ''
for i in range(0,SAMPLE_RATE*1): # 1 Segundos....
 Data += pack('h',Volu*sin(i*500.0/SAMPLE_RATE)) # Tono 500Hz
wv.writeframes(Data)
wv.close()

## Genera Stereo Tones...
wv = wave.open('st.wav', 'w')
wv.setparams((2,2,SAMPLE_RATE,0,'NONE','not compressed'))
Volu = int(2**15-1.0)/1 # Volumen = Amplitude 1/4 de Volumen...
Data =''
for i in range(0,SAMPLE_RATE*3):
 Data += pack('h',Volu*sin(i*500.0/SAMPLE_RATE)) # Tono 500Hz Canal Izquierdo
 Data += pack('h',Volu*sin(i*200.0/SAMPLE_RATE)) # Tono 200Hz Canal Derecho
wv.writeframes(Data)
wv.close()