import { Component } from '@angular/core';
import {  NavController } from 'ionic-angular';
import { ANIMALES } from '../../assets/data.animales';
import { AnimalInterfaz } from '../../interfaces/animal.interface';


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
	
	lista:number[] = [1,2,3,4,5];





animales:AnimalInterfaz[] = [];

  constructor() {  //public navCtrl: NavController
  	  this.animales = ANIMALES.slice();    //agarro todas las referencias a este item, pero no quiero las referencia porq más adelante voy a poder eliminar, editar, etc
  	  console.log(this.animales);
 }


  
  ionViewDidLoad() {
    console.log('ionViewDidLoad CartPage');
  }

}

export interface InterfazHeroe {

}