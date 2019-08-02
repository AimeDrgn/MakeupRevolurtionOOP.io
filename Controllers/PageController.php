<?php

namespace Controllers;

use Core\Controller as BaseController;

class PageController extends BaseController{
    public function lipstick(){
        $this->render('default/page');
    }
    public function blush(){
        $this->render('default/blush');
    }
    public function eyeliner(){
        $this->render('default/eyeliner');
    }
    public function eyeshadow(){
        $this->render('default/eyeshadow');
    }
    public function faceproducts(){
        $this->render('default/faceproducts');
    }
    public function oneitem(){
        $this->render('default/one-item');
    }
    public function login(){
        $this->render('default/login');
    }
}