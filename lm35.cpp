#include<iostream>
#include<fstream>
#include<string>
#include<sstream>
#include<stdlib.h>
using namespace std;

#define LDR_PATH "/sys/bus/iio/devices/iio:device0/in_voltage"

int readAnalog(int number){ // returns the input as an int
   stringstream ss;
   ss << LDR_PATH << number << "_raw";
   fstream fs;
   fs.open(ss.str().c_str(), fstream::in);
   fs >> number;
   fs.close();
   return number;
}

float getTemperature(int adc_value){
   float cur_voltage = adc_value * (1.80f/4096.0f);
   float diff_degreesC = (cur_voltage)/0.01f;
   return (diff_degreesC);
}

int main(int argc, char* argv[]){
   int ain = 0;
   if (argc>1) ain = atoi(argv[1]);
   cout << getTemperature(readAnalog(ain)) << endl;
   return 0;
}
