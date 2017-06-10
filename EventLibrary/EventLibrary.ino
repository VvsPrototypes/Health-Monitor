#include <Wire.h>
#include <MPU6050.h>
#include "Protocentral_MAX30205.h"
#include "Energia.h"
#include "rtosGlobals.h"
#include "Event.h"
#include "MAX30100_PulseOximeter.h"

PulseOximeter pox;

MPU6050 mpu;
MAX30205 tempSensor;

int pulse;
int temp; 
int t;
int i=0;

void setup()
{
  Wire.begin();
  
  Serial.begin(115200);
  
  transmit.begin();

  tempSensor.begin();

  pox.begin();
  
  while (!mpu.begin(MPU6050_SCALE_2000DPS, MPU6050_RANGE_16G))
 {
   Serial.println("Could not find a valid MPU6050 sensor, check wiring!");
   delay(500);
 }
  mpu.setAccelPowerOnDelay(MPU6050_DELAY_3MS);
  mpu.setIntFreeFallEnabled(true);
 mpu.setDHPFMode(MPU6050_DHPF_5HZ);
mpu.setFreeFallDetectionThreshold(17);
 mpu.setFreeFallDetectionDuration(2);
}

void loop()
{
  temp = tempSensor.getTemperature();
  t = temp + 3; //Calibration
   pox.update();
   while(i<2000)
  {
  pulse=pox.getHeartRate();
  i++;
  delay(1);
  }
  Serial.println(pulse);
  delay(2000);
  Vector rawAccel = mpu.readRawAccel();
  Activites act = mpu.readActivites();
  if (act.isFreeFall || t < 33 || t > 39|| pulse>100 || pulse<60)
  {
    transmit.send();
  }
  else {
  
    Serial.println("All Good");
  
  }
  
  delay(100);

}

