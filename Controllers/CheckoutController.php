<?php


namespace Controllers;

use Core\Controller as BaseController;

class CheckoutController extends BaseController{
    public function index(){
        $this->render('default/checkout');
    }
    public function cart(){
        $this->render('default/cart');
    }
    
}