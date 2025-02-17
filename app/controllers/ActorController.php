<?php
require_once './core/Controller.php';

class ActorController extends Controller{
    public function index(...$params){
        echo "Hola desde index de Actor ".implode(" ", $params);
    }
}