<?php

abstract class Controller
{

    // Método abstracto: Todas las clases hijas deben implementarlo
    abstract public function index(...$params);

    // Método concreto: Puede ser usado directamente en los controladores hijos
    protected function view($view, $data = [])
    {
        $viewPath = "./app/views/" . $view . ".php";

        if (file_exists($viewPath)) {
            extract($data);
            require $viewPath;
        } else {
            die("Vista '$view' no encontrada.");
        }
    }
}
