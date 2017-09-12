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

#npm install @ionic-native/core --save
#ionic cordova plugin add cordova-plugin-camera


ionic cordova plugin add phonegap-plugin-barcodescanner 
sudo npm install --save @ionic-native/barcode-scanner


ionic cordova plugin add cordova-plugin-inappbrowser
sudo npm install --save @ionic-native/in-app-browser

sudo npm install @agm/core --save


ionic cordova plugin add cordova-plugin-contacts
npm install --save @ionic-native/contacts




https://www.qrcode.es/es/generador-qr-code/

///////////////////////////////////////////

sudo nano /etc/profile

JAVA_HOME=/usr/lib/jvm/java-8-oracle
JRE_HOME=$JAVA_HOME/jre
ANDROID_HOME=/home/estrategas/Android/Sdk
ANDROID_MIO=/usr/local/android-studio
PATH=$PATH:$ANDROID_HOME/bin
PATH=$PATH:$ANDROID_HOME/tools
PATH=$PATH:$ANDROID_HOME/platform-tools
PATH=$PATH:$ANDROID_HOME/tools/bin
PATH=$PATH:$ANDROID_MIO/bin
PATH=$PATH:$ANDROID_MIO/gradle
PATH=$PATH:$ANDROID_MIO/gradle/gradle-3.2/bin/
PATH=$PATH:$JAVA_HOME/bin:$JRE_HOME/bin

export JAVA_HOME
export JRE_HOME
export ANDROID_MIO
export ANDROID_HOME
export PATH

