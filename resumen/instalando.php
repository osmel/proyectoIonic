npm install -g ionic cordova
ionic info
ionic start qrap1 blank
cd qrap1
ionic serve  
////////////////////
ionic cordova platform ls 
ionic cordova platform remove android 
ionic cordova platform add android  
///////////////////////////////////
ionic cordova build android  
///////////////////////////////////
./studio.sh
///////////////////////////////////




https://www.qrcode.es/es/generador-qr-code/

///////////////////////////////////////////

sudo nano /etc/profile
JAVA_HOME=/usr/lib/jvm/java-8-oracle 
JRE_HOME=$JAVA_HOME/jre 
ANDROID_MIO =/home/estrategas/Android/Sdk 
ANDROID_HOME =/usr/local/android-studio 

PATH=$PATH:$ANDROID_MIO
PATH=$PATH:$ANDROID_MIO/bin 
PATH=$PATH:$ANDROID_MIO/tools 
PATH=$PATH:$ANDROID_MIO/platform-tools 
PATH=$PATH:$ANDROID_MIO/tools/bin 
PATH=$PATH:$ANDROID_HOME
PATH=$PATH:$ANDROID_HOME/bin 
PATH=$PATH:$ANDROID_HOME/gradle 
PATH=$PATH:$ANDROID_HOME/gradle/gradle-3.2/bin/ 
PATH=$PATH:$JAVA_HOME/bin:$JRE_HOME/bin 

export JAVA_HOME 
export JRE_HOME 
export ANDROID_MIO 
export ANDROID_ HOME 
export PATH 