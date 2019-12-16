const int pinLed = 9; //pin 9 digital para el led
const int pinPot = A0; // pin A0 analogo del potenciometro
int temp;
int valorPot;

void setup() {
  // Inicializa la comunicacion sereal
  Serial.begin(9600);
  pinMode(pinLed, OUTPUT); //inicializa el componente con el pin 9 y en salida
}

void loop() {
  valorPot = analogRead(pinPot); //lee el valor del potenciometro
  Serial.println(valor); //
  if (valorPot > 250){ //se ejecuta si el valor entregado por el potenciometro es mayor a 250
    digitalWrite(pinLed, HIGH); //enciende el led
  }else{
    digitalWrite(pinLed, LOW); //apaga el led
  }
}
