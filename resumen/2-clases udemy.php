
///////////////////////////////cap21----Componentes----------/////////////////

Ionic nos ofrece una amplia gama de componentes listos para utilizar y que nos facilitarán la labor de crear nuestra interfaz de usuario con un estilo atractivo y profesional.
https://ionicframework.com/docs/v2/components/ 

////////////

Todos los componentes de ionic comienzan con el prefijo “ion-“.
	Como ionic está basado en Angular 2  si en algún caso no nos es suficiente con los componentes que nos ofrece ionic podríamos crear nuestros propios componentes personalizados de la misma manera que en angular 2, aunque en la mayoría de los casos no será necesario ya que ionic nos ofrece una amplia gama de componentes para poder desarrollar nuestras aplicaciones.

	Componentes en la pagina
		ion-header: Cabecera.
		ion-navbar: Barra de navegación.
		ion-title: Título.
		ion-content: Contenido de la página.



   ////////////

   <ion-input type="number" min="1" max="100" [(ngModel)]="num" placeholder="Introduce un número del 1 al 100"></ion-input>
      ion-input: Parecido a un input de html,  tipo number, rango mínimo a 1 y máximo a 100.
                 [(ngModel)]:  encargado de hacer el Data Binding bidireccional entre el "valor del input" y una "variable num" que estará definida en el controlador de la página.
                  - Data Binding bidireccional: ya que si se introduce un valor en el input automáticamente este será reflejado en la variable del controlador, del mismo modo si algún proceso cambia el valor de esta variable en el controlador este automáticamente aparecerá reflejado como valor del input. 
                  - placeholder indicando que se introduzca un valor entre 1 y 100.

   <p>El número secreto es {{ mayorMenor }}</p>                  
        “{{ }}”  : hacemos un "Data Binding unidireccional", mayorMenor es una variable que estará definida en el controlador y con las dobles llaves muestra su valor. 

   <button ion-button block (click)="compruebaNumero()">Adivina</button>
   	   
   	   diferentes tipos de botones: https://ionicframework.com/docs/components/#button-sizes     


////////////

  		Import: "importar módulos" que contienen librerías y clases para poder utilizarlas en nuestro proyecto. 
  			--Podemos importar módulos propios de Ionic que ya se incorporan al crear un proyecto, librerías de AngularJS, librerías de terceros que podemos instalar o nuestras propias  librerías.


  			import { Component } from '@angular/core';      //elemento Component de Angular. Las páginas son componentes de Angular, por eso necesitamos importar Component.
  			import { NavController } from 'ionic-angular'; // elemento NavController de ionic-angular. (para poder navegar entre distintas páginas)

		    

		@Component({  //decorador de Angular. Angular usa los decoradores para registrar un componente. Existen @Component, @Injectable, @Pipe, @Directive
		  selector: 'page-home',   //selector css que se va a aplicar a la página,
		  templateUrl: 'home.html' //plantilla html que va a renderizar la página.
		})  			


		export class HomePage {  //"exportar la clase" para luego poderla importar si queremos llamar a  la página desde cualquier otro sitio de la aplicación

				***variables deben de estar definidas en el controlador dentro de la clase 
					tipos primitivos: 
							number (Numérico).
							string (cadenas de texto).
							boolean (Booleano: true o false).
							any (cualquier tipo).
							Array.
			num:number;
		    mayorMenor: string = '...';
		    numSecret: number = this.numAleatorio(0,100);
				

		  constructor(public navCtrl: NavController) {
		    
		  }

		  numAleatorio(a,b) {
		      return Math.round(Math.random()*(b-a)+parseInt(a));
		  }

		}


    ////////////
		https://ionicframework.com/docs/v2/components/#cards
			<ion-card *ngIf="mayorMenor=='igual'">
			     <ion-card-header>
			        ¡¡¡Enhorabuena!!!
			      </ion-card-header>
			      <ion-card-content> 
			          Has acertado, el número secreto es el {{ num }}
			      </ion-card-content>
			</ion-card>	

		ion-card, las cards o “tarjetas”: son componentes que muestran la información en un recuadro. 
		    <ion-card-header> y <ion-card-content>, cabecera dentro de la tarjeta y contenido que deseemos.
	


		*ngIf: directiva estructural,  nos permite alterar el DOM (Document Object Model), 

   	



http://blog.ionic.io/10-minutes-with-ionic-2-adding-pages-and-navigation/
https://www.youtube.com/watch?v=QbvgZGUl4hQ




/////////////////////


<ion-list>
  <ion-item-sliding>
		    
		    <ion-item> <!--texto -->
		      <ion-avatar item-start>
		        <img src="img/slimer.png">
		      </ion-avatar>
		      <h2>Slimer</h2>
		    </ion-item>

		    <ion-item-options side="left">  <!--botones:  ion-item-options -->
			      <button ion-button color="primary">
			        <ion-icon name="text"></ion-icon>
			        Text
			      </button>
			      <button ion-button color="secondary">
			        <ion-icon name="call"></ion-icon>
			        Call
			      </button>
		    </ion-item-options>

		    <ion-item-options side="right">  <!--botones:  ion-item-options -->
			      <button ion-button color="primary">
			        <ion-icon name="mail"></ion-icon>
			        Email
			      </button>
		    </ion-item-options>

  </ion-item-sliding>
</ion-list>


 <!--ion-item           			:texto o elemento de la list-->
<!-- ion-item-sliding   			:sliding de cada elemento de la list-- >
<!--botones:  ion-item-options      :Botones de cada elemento de la list-->




refresh (se encuentra en la API)

<ion-content>

  <ion-refresher (ionRefresh)="doRefresh($event)">
    <ion-refresher-content></ion-refresher-content>
  </ion-refresher>

</ion-content>

(ionRefresh)--> es un evento que emite la pagina cdo se baja todo hasta abajo, es decir hace el cambio de flecha para refrescar
      y pasa un parametro(eventoderefresh)



//////////////////
  los <ion-list reorder="true">
    tienen una propiedad: 
    		reorder="true"  -->para que se puedan mover los elementos
      ademas tambien emiten eventos : 
      		ionItemReorder:  Emite este cdo un item cambia de posicion          (ionItemReorder) ="reordenarAnimales($event)"  



