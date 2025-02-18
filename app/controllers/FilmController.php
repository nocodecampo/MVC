<?php

namespace Formacom\controllers;

use Formacom\Core\Controller;
use Formacom\models\Film;
use Exception;

class FilmController extends Controller
{

    public function index(...$params)
    {
        $peliculas = Film::all();
        $this->view('film_list', $peliculas);
    }


}
