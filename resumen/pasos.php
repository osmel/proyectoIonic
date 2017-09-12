Cap 13

	https://ionicframework.com/docs/intro/installation/
1- instalar IONIC y cordova
     npm install -g ionic cordova
2- ver la version     
     ionic -v 
     ionic info  //para ver version tambien
3- Ejecutamos ionic para verificar si todo esta ok
       ionic  

////////////////para actualizar version/////////////////
	https://ionicframework.com/docs/cli/       
	asegurarse de que node(este por encima de version >6) y npm(este por encima de version >3)
	npm -v
			3.10.10
	node -v
			v6.11.1
	ionic -v   
			3.9.2
	sudo npm install -g ionic@latest			

	ionic -v   
			3.9.2(esta es la ultima version)

//////////////////////////////////
4- Crear Proyecto

 	ionic start proyecto tabs 

 										//--type  : este ya no se usa --v2, --v1 (que queremos un proyecto con versiones 2 o 1 de ionic)
 										 ionic: es para llamar al cli
 									     "start": le dirá a CLI que cree una nueva aplicación.
 									  "proyecto": será el "nombre de carpeta" y el "nombre de la app" de su proyecto. 
 									      "tabs":  **este es quien le dice a ionic que tipo de template basico quiere**
 									      		será la plantilla inicial para su proyecto. Proyecto basado en tabs. Un simple diseño de 3 pestañas



								 
			  

							Ionic tiene algunas "plantillas disponibles": para crear tipos de proyectos
												 	"blank": Proyecto en blanco. un arranque sin nada con una sola página
												 	tabs(defecto) : Proyecto basado en tabs. Un simple diseño de 3 pestañas
													sidemenu: Un diseño con un menú deslizable en el lado
													super: proyecto de arranque con más de 14 diseños de página listos para usar.
													tutorial: Un proyecto de arranque guiado   									  
   									

5- Cómo ver la aplicación en un navegador
    	cd proyecto
    	ionic serve  
    	ionic serve -l:  visualizar como queda la app en todas las plataformas.



///////////////////////////////cap14----CLI----------/////////////////
https://ionicframework.com/docs/cli/
	ionic start -->crear un nuevo proyecto
	ionic serve -->levantar el server

	ionic docs ->abre directamente la documentacion de ionic
	ionic generate -> para generar pipes, components, pages, directives, providers, and tabs (ionic-angular >= 3.0.0)






	ionic info -->devuelve todas las versiones(ionic, cli, cordova)
	ionic login --> para cambiar la relacion que hay entre nuestra pc y el framework de ionic
					Autenticar con servidores Ionic y recuperar un token de usuario, que se almacena en la configuración CLI.
					Como alternativa, establezca las variables de entorno IONIC_EMAILy IONIC_PASSWORD, y la CLI se autenticará automáticamente.
	ionic signup--> Crear una cuenta Ionic.
	ionic upload -->subir mis app al dashboard de app en la nuve que tiene ionic

	ionic link --pro-id a1959701   -->enlazarlo con la app que esta en la nube
		proyecto/ionic.config.json


///////////////////////////////cap15----Estructura----------/////////////////


 -->"carpeta hook": nos permite agregar cierto tipos de tareas especifica que podemos ejecutar cuando ocurre algo en nuestra app, o relacionado a los comandos de cordova.  Ejemplo agregar un codigo cuando se compila, se agrega algun plugins, etc

 -->"carpeta node_modules": todos los paquetes que utiliza nuestra app, ya sea para produccion o desarrollo

-->"carpeta platforms":(no la tocaremos manualmente) Contiene aplicaciones compatibles con (IOS, Android). Son proyectos completamente funcionales de cada plataforma
-->"carpeta plugins"(no la tocaremos manualmente): Es la carpeta donde van a caer los plugins que usemos en nuestras app, por ejemplo:
                     cuando necesitamos usar la camara, instalaremos un "plugins de cordova para manejar la camara". o gps , etc 

-->"carpeta resources": Contiene nuestros iconos e imagenes tanto para IOS, como para android

-->"src" ->es la carpeta de angular, pero "siguiendo los lineamiento de ionic"
		├── assets   //  recursos estaticos de nuestra app(imagenes, sonido, )  
		├── pages     //"Propia de IONIC" Componentes -->paginas completas de IONIC
		 			  // Donde se van a alojar todas la páginas que contenga nuestra aplicación. 
		 			  // Una página será como una vista o un pantalla de nuestra aplicación.
		 			  "Al crear un proyecto con la plantilla blank ionic": genera por defecto un página llamada home, que como su propio nombre indica es la página inicial que se va a mostrar al iniciar nuestra aplicación. Esta página la podemos mantener como página principal y modificarla, o podemos eliminarla y crear otra con el nombre que nosotros queramos. De momento vamos a mantener la que nos ha creado por defecto y vamos a modificar su contenido.
		├	 ├─ about
		├	 ├─ contact
		├	 ├─ home
				  ├─  home.html    Contiene la plantilla html de la página.
				  ├─  home.scss    Contiene el archivo sass donde podremos modificar el estilo de los componentes de la página.
				  ├─  home.ts      Archivos typescript que contiene el controlador de la página, donde definiremos el comportamiento de la misma,      
				  			       como por ejemplo la función con la lógica a ejecutarse cuando se pulse sobre un botón de la página etc.
		├
		├── app     //"carpeta de angular
			 ├─ app.component.ts
			 ├─ app.html
			 ├─ app.module.ts
			 ├─ app.scss
			 ├─ main.ts
		├── theme 	 
			├─ variables.scss (Archivo principal del tema de nuestra Aplicacion)

		├── declarations.ts (archivo declaraciones de typeScript a decirle: existe en este caso, "un objeto llamado module que esta de forma global						no te preocupes typescript eso va a funcionar en tiempo de ejecucion". Este archivo nos va ayudar a definir 							cosas de forma global, u objeto de forma global para que typeScript no nos este marcando los errores)
		
		├── index.html 	   (Archivo principal de la Aplicacion o la primera pagina que esta cargando)
		├── manifest.json
		├── service-worker.js

---> "wwww" --> es algo que no vamos a tocar directamente. Este es el producto de la carpeta "src". Pero ya lista para probar en un navegador

--> "fichero config.xml" --> Lo ocuparemos mucho cuando estemos en el despliegue(deploy) de la APP
						  -->id: id unico que debe tener nuestra app para subir a una AppStore	
						   -->contiene parámetros que se utilizan cuando se construye un proyecto nativo a partir de un proyecto ionic. Aquí deberemos indicar los permisos especiales que necesite la aplicación y otras configuraciones que puedan ser necesarias.


--> ".editorconfig y .gitignore":  (archivos ocultos): relacionados con la configuración del "editor de código y Git".

-->ionic.config.json:  Contiene información básica sobre la configuración nuestro proyecto, se utiliza si vas a subir tu aplicación a la 	
                        plataforma Ionic.io. -->enlazarlo con la app que esta en la nube



--> package.json: Contiene paquetes y dependencias de nodeJS.                        

--> tsconfig.json y tslint.json: Contienen información necesaria a la hora de compilar TypeScript, no necesitamos editar estos archivos.




https://reviblog.net/2017/02/10/tutorial-de-ionic-2-estructura-de-un-proyecto-ionic-2/
http://mialtoweb.es/estructura-de-un-proyecto-con-ionic/						  

///////////////////////////////cap16----Ionic view para un rapido Despliegue----------/////////////////



























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








