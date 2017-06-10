#include "Energia.h"
#include "rtosGlobals.h"
#include "Event.h"
#include "OPT3001.h"

#define USE_USCI_B1 

opt3001 opt3001;

int ecgv[500];

int breathe[500];

void getecg()
{
  if ((digitalRead(11) == 1) || (digitalRead(31) == 1)) {
    Serial.println('!');
  }
  else {
    for (int i = 0; i < 500; i++)
    {
      ecgv[i] = analogRead(A8);
      delay(10);
    }

  }
}

void getbreathe()
{ for (int i = 0; i < 500; i++)
  {
    breathe[i] = analogRead(A8);
    delay(50);
  }
}

void printall()
{
 Serial1.println("T");
  Serial1.println(temp);
delay(1000);
Serial1.println("E")
  for (int i = 0; i < 500; i++)
    {
      Serial1.println(ecgv[i]);
}
delay(1000);
Serial.println("P");
Serial.println(pox.getHeartRate());
delay(1000);
Serial.println("B");
for (int i = 0; i < 300; i++)
  {
    Serial.println(breathe[i]);
    delay(50);
  }

}

void serialSetup()
{
  Serial.begin(115200);
  //ECG
  pinMode(11, INPUT); // Setup for leads off detection LO +
  pinMode(31, INPUT); // Setup for leads off detection LO -
  opt3001.begin(); 

  delay(500);
}


void serialLoop()
{
  transmit.waitFor();
  uint32_t readings;
  readings = opt3001.readResult();  
  int opt = (readings, DEC);
  if(opt<100)
  {
    Serial.println("O");//tell edison to turn ON Light
  }
  getecg();
  float temp = tempSensor.getTemperature();
  getbreathe();
  printall();
}



