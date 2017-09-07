import { Component } from '@angular/core';
import { NavController } from 'ionic-angular';

@Component({
  selector: 'page-home',
  templateUrl: 'home.html'
})
export class HomePage {

  pana:string="pana";	
  constructor(public navCtrl: NavController) {

  } 

}
