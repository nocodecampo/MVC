<?php
require_once './core/Controller.php';

class ActorController extends Controller
{

    public function index(...$params)
    {
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
