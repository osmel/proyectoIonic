import { Component } from '@angular/core';
import {  NavController } from 'ionic-angular';
import { ANIMALES } from '../../assets/data.animales';
import { AnimalInterfaz } from '../../interfaces/animal.interface';

import { Refresher, reorderArray } from "ionic-angular"; //Refresher: para tener todos los metodos de refresh a la mano, en vez de usar any

//, NavParams
//IonicPage,

/**
 * Generated class for the CartPage page.
 *
 * See http://ionicframework.com/docs/components/#navigation for more info
 * on Ionic pages and navigation.
 */

//@IonicPage()
@Component({
  selector: 'page-cart',
  templateUrl: 'cart.html',
})
export class CartPage {

	//lista:any= array(1,2,3);

  animales:AnimalInterfaz[] = [];
  audio = new Audio();  //Para manejar un inico audio,  para tener una unica referencia, para evitar que se monten los sonidos
  audioTiempo:any;  //para controlar el timet
  ordenando:boolean = false;  //esta variable es para indicar cdo se esta ordenando

	
	lista:number[] = [1,2,3,4,5];





//animales:AnimalInterfaz[] = [];

  constructor() {  //public navCtrl: NavController
  	  this.animales = ANIMALES.slice(0);  //slice: va a crear un clone de ese objeto. Sino usamos slice pues tendremos el mismo objeto y no queremos afectar el mismo objeto
                                          // de esta manera ya son objetos completamente diferente, de lo contrario todo lo que afecte en uno, se afectaria en el otro
                        

  	 // console.log(this.animales);
 }


  
  ionViewDidLoad() {
    console.log('ionViewDidLoad CartPage');
  }


/*

  reproducir(anim:AnimalInterfaz) {
      //console.log(anim);
      
      let audio= new Audio(); //aqui vamos a usar un objeto del Html5(audio). typescript lo deberia reconocer sin problema
      audio.src = anim.audio;
      
      audio.load();  //cargue sonido
      audio.play();  //inicie sonido

      anim.reproduciendo = true;  //que comience en un estado de true, por defecto tiene false en la bd

      setTimeout(()=>
        anim.reproduciendo = false, 
        anim.duracion *1000
        )
      

  }

*/
    //para el audio
     reproducir(anim:AnimalInterfaz){
        this.pausarAudio(anim);

        if(anim.reproduciendo){ //si se esta reproduciendo que se detenga
          anim.reproduciendo = false
          return
        }

        this.audio.src = anim.audio;

        this.audio.load();
        this.audio.play();
        anim.reproduciendo = true;

        this.audioTiempo = setTimeout( ()=>anim.reproduciendo = false,anim.duracion * 1000);
      }

      private pausarAudio(animalSeleccionado:AnimalInterfaz){
        clearTimeout (this.audioTiempo);  //resetear ek timeOut, para que limpie el setTimeout, lo para
        this.audio.pause();
        this.audio.currentTime = 0;  //para que se ponga al inicio del audio

        for (let anim of this.animales){
          if(anim.nombre != animalSeleccionado.nombre){ 
            anim.reproduciendo = false; //ponerle prop a false a todos los animales
          }
        }
      }


 // Elimina un elemento del array     
  borrarAnimal(idx:number){
    this.animales.splice(idx,1);  //splice-->elimina 1 posicion del arreglo . agarrar 1 registro solo para eliminar
  }


  
  //recargarAnimales(refresher:any) {
    //clase 27 Refrescando la pagina
  recargarAnimales(refresher:Refresher) {

      setTimeout( ()=>{
        this.animales = ANIMALES.slice(0);  //aqui recargamos los elementos de los animales
        refresher.complete();  //aqui cancelamos "el loading" del refresh

      },1500 )  //ponerle 1.5 seg para ver el refresh
    }



   //clase 28 reordenar elementos en la lista  <ion-list reorder="true">
  reordenarAnimales(indices:any){
    console.log(indices);  //Retorna un objeto como este ReorderIndexes {from: 2, to: 1}from: 2to: 1__proto__: Object
    
    //para evitar programar con el resultado que nos da indices, ionic penso por nosotros y nos entrego la funcion reorderArray(que nos evita tener que hacer el trabajo a mano de ordenamiento)
    this.animales = reorderArray(this.animales, indices)

  }






}
