<?php

namespace Controllers;

use Model\Ingresos;
use Model\Proyecto;
use MVC\Router;

class ControladorPaginas {

    public static function index(Router  $router) {
        $proyectos = Proyecto::get(3);
        $ingresos = Ingresos::get(3);
        $router -> render('pages/Index', [
            'proyectos' => $proyectos,
            'ingresos' => $ingresos,
        ]);
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