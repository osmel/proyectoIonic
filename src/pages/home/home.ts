import { Component } from '@angular/core';
import { NavController } from 'ionic-angular';
import {CartPage} from '../cart/cart';

@Component({
  selector: 'page-home',
  templateUrl: 'home.html'
})
export class HomePage {
	cartPage = CartPage;

  constructor(public navCtrl: NavController) {
  }
  
}
