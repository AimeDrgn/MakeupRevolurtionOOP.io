<?php


namespace Controllers;

use Core\Controller as BaseController;

class DefaultController extends BaseController{

    public function index() {
        $this->render('default/index');
    }
    public function notFound(){
        $this->render('default/404');
    }
}