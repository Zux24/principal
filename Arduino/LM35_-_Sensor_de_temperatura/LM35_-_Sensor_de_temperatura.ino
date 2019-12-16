float temperatura; 

void setup() {
  Serial.begin(9600);

}

void loop() {
  temperatura = (5.0 * analogRead(0)*100.0)/1023.0; //calculo
  Serial.println(temperatura); // imprimir temperatura
  delay(1000); //espera unos segundos para la siguiente medicion

}
