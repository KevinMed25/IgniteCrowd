<?php

namespace Controllers;

use Model\Proyectos;
use MVC\Router;

class ControladorPaginas {

    public static function index(Router  $router) {

        $principal = true;

        $router -> render('pages/Index', [
            'principal' => $principal,
        ]);
    }

    public static function catalogo(Router  $router) {
        $router -> render('pages/Catalogo', []);
    }
}

?>