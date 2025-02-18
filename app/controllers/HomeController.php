<?php

namespace Formacom\controllers;
use Formacom\Core\Controller;

class HomeController extends Controller
{

    public function index(...$params)
    {
        $data = ['mensaje' => '¡Bienvenido a la página de inicio!'];
        $this->view('home', $data);
    }

    public function new()
    {
        echo "Hola desde New de HomeController";
    }
}
