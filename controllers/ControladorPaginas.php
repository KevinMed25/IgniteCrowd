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
    
    public static function preguntasFrecuentes(Router $router) {
        $router -> render('pages/PreguntasFrecuentes', []);
    }

    public static function ayudaAutores(Router $router) {
        $router -> render('pages/AyudaAutores', []);
    }

    public static function ayuda(Router $router) {
        $router -> render('pages/Ayuda', []);
    }
    
    public static function cookiesPage(Router $router) {
        $router -> render('pages/Cookies', []);
    }

}

?>