<?php
require_once './core/Controller.php';

class HomeController extends Controller{

    public function index(...$params){
        echo "Hola desde Index de HomeController";
    }

    public function new(){
        echo "Hola desde New de HomeController";
    }
}

?>