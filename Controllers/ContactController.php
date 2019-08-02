<?php
namespace Controllers;

use Core\Controller as BaseController;

class ContactController extends BaseController{
    public function index(){
        $this->render('default/contact');
    }
    
}