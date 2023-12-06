<?php

namespace Controllers;

use Model\Proyecto;
use Model\Usuario;
use MVC\Router;

class ControladorPaginas {

    /**
     * @param $router representa una instancia del objeto Router para acceder a sus métodos
     * 
     *  Renderiza y envia  a la pagina principal los datos que requiere
     */
    public static function index(Router  $router) {
        $proyectos = Proyecto::get(3);
        $router -> render('pages/Index', [
            'proyectos' => $proyectos,
        ]);
    }

     /**
     * @param $router representa una instancia del objeto Router para acceder a sus métodos
     * 
     *  Renderiza y le envia la informacion de todos los proyectos a la vista del catalogo de proyectos
     */
    public static function catalogo(Router  $router) {
        $proyectos = Proyecto::all();
        $router -> render('pages/Catalogo', [
            'proyectos' => $proyectos,
        ]);
    }

    /**
     * @param $router representa una instancia del objeto Router para acceder a sus métodos
     * 
     *  Renderiza la vista de cada proyecto y envia su informacion segun la ID correspondiente
     */
    public static function descripcion(Router $router) { 
        $id = validarRedireccionar('/Descripcion');
        $proyecto = Proyecto::find($id);
        $usuario = Usuario::find($proyecto->usuarioid);
        $router->render('pages/Descripcion', [
            'proyecto' => $proyecto,
            'usuario' => $usuario,
        ]);
    }

        /**
     * @param $router representa una instancia del objeto Router para acceder a sus métodos
     * 
     *  Renderiza la vista de preguntas frecuentes
     */
    public static function preguntasFrecuentes(Router $router) {
        $router -> render('pages/PreguntasFrecuentes', []);
    }

    /**
     * @param $router representa una instancia del objeto Router para acceder a sus métodos
     * 
     *  Renderiza la vista de ayuda para autores
     */
    public static function ayudaAutores(Router $router) {
        $router -> render('pages/AyudaAutores', []);
    }

    /**
     * @param $router representa una instancia del objeto Router para acceder a sus métodos
     * 
     *  Renderiza la vista del formulario de ayuda
     */
    public static function ayuda(Router $router) {
        $router -> render('pages/Ayuda', []);
    }

    /**
     * @param $router representa una instancia del objeto Router para acceder a sus métodos
     * 
     *  Renderiza la vista de la politica de cookies
     */    
    public static function cookiesPage(Router $router) {
        $router -> render('pages/Cookies', []);
    }

}

?>