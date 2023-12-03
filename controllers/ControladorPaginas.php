<?php

namespace Controllers;

use Model\Proyectos;
use MVC\Router;

class ControladorPaginas {

    public static function index(Router  $router) {
        $router -> render('pages/Index', []);
    }

    public static function catalogo(Router  $router) {
        $router -> render('pages/Catalogo', []);
    }
    
    public static function crearProyecto(Router $router) {
        $router -> render('pages/CrearProyecto', []);
    }
}

?>