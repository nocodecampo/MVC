<?php

namespace Formacom\controllers;
use Formacom\Core\Controller;
use Formacom\models\Actor;

class ActorController extends Controller
{

    public function index(...$params)
    {
        $actores = Actor::all();
        echo "Hola desde index de Actor " . implode(" ", $params);
    }

    public function new(...$params)
    {
        if (isset($_POST['first_name']) && isset($_POST['last_name'])) {
            var_dump($_POST);
            exit();
        } else {
            $this->view('new_actor');
        }
    }
}
