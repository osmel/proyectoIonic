	https://www.youtube.com/watch?v=W2Mil4YjjNw&list=PLJUg86oqMh_j8ocF7qT_RddSdJ6igcljC
	


1 - instalación    --> https://ionicframework.com/docs/intro/installation/
   1- npm
   2- cordova  min.3.34 ->libreria q nos permiter ejecutar app(html, javascript) como si fueran app moviles dentro de webViews(contenedores 
   						de paginas web). 
       					Cordova crea app nativas, donde carga un webview y dentro de ese webview se ejecuta nuestra app, eso es transparente y el usuario tiene la sensacion que su app es nativa

       sudo npm install -g cordova (instala a nivel -Global el paquete cordova)       					
   3- instalar IONIC (min 5.03)
     npm install -g ionic 
     ionic -v o  ionic info  //para ver version



    
		OJO:EN la version 1 habia una nota, que no sé si todavia es necesaria (Android sólo tenia 32 bits)
		  https://ionicframework.com/docs/v1/guide/installation.html

		Si está ejecutando una versión de 64 bits de Ubuntu, tendrá que instalar las librerias de 32 bits, ya que Android sólo tiene 32 bits en este momento.		
		   sudo apt-get install ia32-libs 
		Si está en Ubuntu 13.04 o superior, `ia32-libs` ha sido eliminado. En su lugar, puede utilizar los siguientes paquetes: En su lugar, puede utilizar los siguientes paquetes: 
		 		$sudo apt-get install lib32z1 lib32ncurses5 lib32bz2-1.0
		Si está ejecutando la versión de 64 bits de Fedora, deberá instalar algunos paquetes de 32 bits: 
			$sudo yum install -y glibc.i686 glibc-devel.i686 libstdc++.i686 zlib-devel.i686
				ncurses-devel.i686 libX11-devel.i686 libXrender.i686 libXrandr.i686



   4- Correr ionic
     ionic start myApp tabs

   5- ejecutamos ionic para verificar si todo esta ok
       ionic     

   6- Crear Proyecto

   		ionic start proyecto blank --type ionic1 //Esto creará una carpeta llamada "proyecto"
   												// con un proyecto en blanco"blank" 
   												//y de la version 1 de ionic (--type ionic1)

    7-  Probar la app directamente en el navegador
    	cd proyecto
    	ionic serve    
      

     


	 https://www.youtube.com/watch?v=KFM46zAmp5I&index=3&list=PLJUg86oqMh_j8ocF7qT_RddSdJ6igcljC
2-  Iniciar una app y verla:  https://ionicframework.com/docs/intro/tutorial/
	- Iniciar new app

	  ionic start MyIonicProject tutorial

			     start: le dirá a CLI que cree una nueva aplicación.
		MyIonicProject: será el "nombre de carpeta" y el "nombre de la app" de su proyecto. 
			  tutorial: será la plantilla inicial para su proyecto. En este caso tutorial

		 	Ionic tiene algunas "plantillas disponibles": para crear tipos de proyectos
			 	blank: Proyecto en blanco. un arranque sin nada con una sola página
			 	tabs(defecto) : Proyecto basado en tabs. Un simple diseño de 3 pestañas
				sidemenu: Un diseño con un menú deslizable en el lado
				super: proyecto de arranque con más de 14 diseños de página listos para usar.
				tutorial: Un proyecto de arranque guiado


	- Cómo ver la aplicación en un navegador
		cd MyIonicProject
    	ionic serve    





   https://www.youtube.com/watch?v=KFM46zAmp5I&index=3&list=PLJUg86oqMh_j8ocF7qT_RddSdJ6igcljC 	
3- Estructura del proyecto   https://ionicframework.com/docs//intro/tutorial/project-structure/
	 A continuación, entraremos en ese directorio y listaremos el contenido. 
	  Esto es lo que la estructura externa de su proyecto ionic se verá así:

      cd proyecto 
      ls

		├── bower.json     // dependencia bower. Configuracion si usamos bower
		├── config.xml     // configuracion cordova 
		├── gulpfile.js    // tareas gulp. Podemos agregar script para automatizar algunas tareas con gulp 
		├── hooks          // custom cordova hooks para ejecutar comandos específicos. Para asignar algunas tareas
		├── ionic.project  // configuracion ionic. Aqui los datos de nuestro proyecto 
		├── package.json   // dependencia de node. Datos de "configuración de npm"
		├── platforms      // Las versiones(build) especificas de iOS/Android residiran aqui
		├── plugins        // Instalaciones de los plugins de cordova / ionic 
		├── scss           // codigo scss , cual dará salida a www/css/
		└── www            // application - Aqui es donde vamos a poner nuestro codigo

			└──	css 
			└── img
			└── index.html
			└── js       (app.js y controllers.js)
			└── lib
			└── template  (son las "views" )  
					


					editor q usa es brackets.io (usa plugins para angular.js)


					index.html: carga a 

						ionic.bundle.js
						cordova.js
						app.js 
						controllers.js

					<body ng-app="started">	  decimos desde angular que cargamos la app started de angular





-------------------------------------
	 
	 -->min 9.00				
	   1-eliminamos todos los .html q tengo dentro de template
	   2-creamos dentro de js
	      mkdir
	        films
	        media
	        menu
	          menu.html
	     mkdir
	        models
	        directives
	        service
	         

					

		menu.html

		 <ion-menu [content]="mycontent">

		 <ion-menu side="right" [content]="mycontent">

		 </ion-menu>
























version Actual
	Guías de plataforma
	
	Para aquellos que crean aplicaciones nativas para iOS y Android (la mayoría de ustedes!), Cada plataforma tiene ciertas características y requisitos de instalación antes de poder sacar el máximo provecho de su desarrollo de Ionic y Cordova.

	Para los desarrolladores de iOS, eche un vistazo a la Guía de la "Plataforma iOS de Cordova" y siga las instrucciones para instalar o actualizar Xcode y posiblemente registrarse para una cuenta de desarrollador para comenzar a crear aplicaciones para iOS.
			https://cordova.apache.org/docs/en/latest/guide/platforms/ios/

	Para los desarrolladores de Android, eche un vistazo a la Guía de "plataformas Android de Cordova" y siga las instrucciones para instalar el SDK y / o Android Studio para comenzar a crear aplicaciones para Android.
			https://cordova.apache.org/docs/en/latest/guide/platforms/android/


version 1

		Configurar plataformas

		Ahora, necesitamos decir a ionic que queremos habilitar las plataformas "iOS y Android". 
		   Nota: a menos que esté en MacOS, deje de lado la plataforma iOS(en pc no se puede habilitar IOS):
		 	
		 	ionic cordova platform add ios
		 	ionic cordova platform add android
		If you see errors here, make sure to follow the platform guides above to install necessary platform tools.


		Si ve errores aquí, asegúrese de seguir la "guías de plataforma" anteriores para instalar las herramientas de plataforma necesarias.
		  
		    Si obtiene este error: [Error: ERROR: Asegúrese de que "JAVA_HOME" está establecido, así como rutas de acceso a su JDK y JRE para java.] A continuación, intente ejecutar este comando primero antes de agregar la "plataforma android":

		    	 export JAVA_HOME=$(/usr/libexec/java_home)


   Probando 
	Sólo para asegurarse de que el proyecto predeterminado funcionó, intente crear y ejecutar el proyecto (sustituya ios por android para que cree un Android en su lugar):

 		ionic cordova build ios
 		ionic cordova emulate ios
















https://www.youtube.com/watch?v=5BTKbwRJ-b0&index=2&list=PLYPjmy5IVxT-7FV0uzpG2izFhGoE0Hq2y
https://www.youtube.com/watch?v=QPwGk8oVw5o&list=PLYPjmy5IVxT_EvelYctg_9Euxdhrnq3He


[Curso Ionic 3 + Firebase]
	https://www.youtube.com/watch?v=QIkCLyIMF2c&list=PLYPjmy5IVxT_uPaY3MSr3dqG9DJTJ-XVC

Curso de ionic2 Publicado el 10 abr. 2017
	https://www.youtube.com/watch?v=EsNG7a_JCzE&list=PL3k5dDnP_nvT24g9WBuT2sCzv7wwv8c8L

que es lo que hace cordova
	https://www.youtube.com/watch?v=peCfRwzMCLM&list=PL4c9utgANL006k-vDxKnDdtLvDbTGMIkj

Jesús Conde
  https://www.youtube.com/watch?v=O9b5tUndB10&list=PLEtcGQaT56chdXOZeYY8uyFeHqDZQqgVg


crea app desde cero (ubuntu)
	https://www.youtube.com/watch?v=d2_6EdbFaVw&list=PLZ0iejvS_2748kKNIa7P6pB9nL_jHeP8r

	https://www.youtube.com/watch?v=onTj9S9GdK0&list=PLLD-AALYgJp7W4SbiaYOdwcdS_pNvyX9Q


	https://www.youtube.com/watch?v=EsNG7a_JCzE&list=PLthkLqA3Za9K5wfdM_x9sDd29D7-poivu

Curso Básico Ionic 1
	https://www.youtube.com/watch?v=-oGk9BC97uQ&list=PLQOoqAvceIINaBgi_71vnrzrkcDXbYF_R


curso ionic1 obsoleto
	https://www.youtube.com/watch?v=fMr8wQ3-mbQ&index=2&list=PL70Go5StQPB9_H4wHwP9VHsE-ybF4hErE
	

https://www.youtube.com/watch?v=PbNacRQUkq8&list=PLIjOho8bkzpPUKbiH_iMahIBFw-mnYyeN



---------------------------------------------------------------------------------------------------------	

https://reviblog.net/tag/libro-ionic-espanol/
https://reviblog.net/2017/02/16/mini-juego-de-acertar-numeros-en-ionic-2-el-controlador-de-la-pagina-y-data-binding/
https://reviblog.net/2017/02/23/tutorial-de-ionic-2-crear-aplicacion-para-guardar-nuestros-sitios-geolocalizados-parte-1-navegacion-por-tabs/
https://reviblog.net/2017/02/23/tutorial-de-ionic-2-crear-aplicacion-para-guardar-nuestros-sitios-geolocalizados-parte-1-navegacion-por-tabs/


https://ionicframework.com/docs/api/
https://www.ion-book.com/
https://www.gitbook.com/@ajgallego
https://ajgallego.gitbooks.io/ionic/content/basicos_primer_proyecto.html


video pago


https://www.udemy.com/curso-de-ionic-2-en-espanol/