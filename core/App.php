<?php

namespace Formacom\Core;


class App
{
    protected $controller = "Formacom\\Controllers\\TareasController";
    protected $method = "index";
    protected $params = [];

    public function __construct()
    {
        $url = $this->parseUrl();

        // Verificar si hay controlador en la URL
        if (!empty($url[0])) {
            $controllerClass = "Formacom\\Controllers\\" . ucfirst($url[0]) . "Controller";

            if (class_exists($controllerClass)) {
                $this->controller = $controllerClass;
                unset($url[0]);
            }
        }
        

        // Instanciar el controlador
        if (class_exists($this->controller)) {
            $this->controller = new $this->controller;
        } else {
            die("❌ Error: Controlador '{$this->controller}' no encontrado.");
        }

        // Verificar el método en la URL
        if (!empty($url[1]) && method_exists($this->controller, $url[1])) {
            $this->method = $url[1];
            unset($url[1]);
        }

        // Definir los parámetros
        $this->params = $url ? array_values($url) : [];

        // Ejecutar el método con los parámetros
        call_user_func_array([$this->controller, $this->method], $this->params);
    }

    private function parseUrl()
    {
        if (isset($_GET['url'])) {
            return explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));
        }
        return ['tareas', 'index']; // Controlador y método por defecto
    }
}
