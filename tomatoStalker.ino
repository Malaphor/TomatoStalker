// This #include statement was automatically added by the Particle IDE.
#include <Adafruit_Si7021.h>

// This #include statement was automatically added by the Particle IDE.
#include <SparkFunMAX17043.h>



int powerPins[] = {2, 3, 4, 5, 6};
int soilSensorPins[] = {A0, A1, A2, A3, A4};
int numSensors = 5;
int val = 0;
unsigned long sensorTimer = millis();

Adafruit_Si7021 tempHumSensor = Adafruit_Si7021();
int tempVals[5] = {0, 0, 0, 0, 0};
int humidityVals[5] = {0, 0, 0, 0, 0};

int sensorInterval = 1000 * 60 * 5;  //30min
int sensorTimes[5] = {0, 0, 0, 0, 0};

String sensorValues = "";

long sleepTime = 60 * 10;  //10min
bool dataAquired = false;

Servo solarTracker;
int servoPos = 0;
int leftLDRpin = A5;
int rightLDRpin = A7;
int leftLDRval;
int rightLDRval;
int calibrateLDR;
int threshold = 50;

void setup() {
    Particle.syncTime();
    for(int i = 0;i < numSensors;i++) {
        pinMode(powerPins[i], OUTPUT);
        digitalWrite(powerPins[i], LOW);
        pinMode(soilSensorPins[i], INPUT);
    }
    Particle.variable("sensorValues", sensorValues);
    
    tempHumSensor.begin();
    lipo.begin();
    lipo.quickStart();
}

void loop() {
    Time.zone(-7);
    if(/*millis()  - sensorTimer >= sensorInterval && */!dataAquired) {
        sensorValues = "";
        for(int i = 0;i < numSensors;i++) {
            digitalWrite(powerPins[i], HIGH);
            val = analogRead(soilSensorPins[i]);
            val = map(val, 0, 4096, 0, 1023);
            sensorValues += val;
            sensorValues += ":";
            digitalWrite(powerPins[i], LOW);
        }
        
        for(int i = 0;i < 4;i++) {
            tempVals[i] = tempVals[i + 1];
            humidityVals[i] = humidityVals[i + 1];
            sensorTimes[i] = sensorTimes[i + 1];
        }
        tempVals[4] = (tempHumSensor.readTemperature() * 1.8 + 32) * 100;  //from C to F
        humidityVals[4] = tempHumSensor.readHumidity() * 100;  //% humidity
        sensorTimes[4] = Time.hour(Time.now()) * 100 + Time.minute(Time.now());
        
        for(int i = 0;i < 5;i++) {
            sensorValues += tempVals[i];
            sensorValues += ":";
        }
        for(int i = 0;i < 5;i++) {
            sensorValues += humidityVals[i];
            sensorValues += ":";
        }
        for(int i = 0;i < 5;i++) {
            sensorValues += sensorTimes[i];
            sensorValues += ":";
        }
        
        sensorValues += (int)(lipo.getVoltage() * 100);
        sensorValues += ":";
        sensorValues += (int)(lipo.getSOC());
        
        leftLDRval = analogRead(leftLDRpin);
        rightLDRval = analogRead(rightLDRpin);
        if(leftLDRval < 500 && rightLDRval < 500) {
            while(servoPos < 150) {
                servoPos++;
                solarTracker.write(servoPos);
                delay(100);
            }
        } else if(leftLDRval - rightLDRval > 15) {
            if(servoPos < 150) {
                servoPos++;
                solarTracker.write(servoPos);
            }
        } else if(leftLDRval - rightLDRval < -15) {
            if(servoPos > 20) {
                servoPos--;
                solarTracker.write(servoPos);
            }
        }
        
        dataAquired = true;
    }
    
    if(dataAquired) {
        if(millis() - sensorTimer >= 60000) {  //delay(60000);
        
            sensorTimer = millis();
            dataAquired = false;
            System.sleep(A7, RISING, sleepTime);
        }
    }

}


