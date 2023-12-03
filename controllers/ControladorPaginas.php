<?php

namespace Controllers;

use Model\Ingresos;
use Model\Proyecto;
use Model\Usuario;
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
        $proyectos = Proyecto::all();
        $ingresos = Ingresos::all();
        $router -> render('pages/Catalogo', [
            'proyectos' => $proyectos,
            'ingresos' => $ingresos,
        ]);
    }

    public static function descripcion(Router $router) { 
        $id = validarRedireccionar('/Descripcion');
        $ingresos = Ingresos::find($id);
        // debug($ingresos);
        $proyecto = Proyecto::find($ingresos->idproyectos);
        $usuario = Usuario::find($ingresos->idusuario);

        $router->render('pages/Descripcion', [
            'proyecto' => $proyecto,
            'ingresos' => $ingresos,
            'usuario' => $usuario,

        ]);
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