<?php

namespace Controllers;

use Model\Ingresos;
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
        // $proyectos = Proyecto::get(3);
        // $ingresos = Ingresos::get(3);
        $proyectos = Proyecto::all();
        $ingresos = Ingresos::all();
        $router -> render('pages/Index', [
            'proyectos' => $proyectos,
            'ingresos' => $ingresos,
        ]);
    }

     /**
     * @param $router representa una instancia del objeto Router para acceder a sus métodos
     * 
     *  Renderiza y le envia la informacion de todos los proyectos a la vista del catalogo de proyectos
     */
    public static function catalogo(Router  $router) {
        $proyectos = Proyecto::all();
        $ingresos = Ingresos::all();
        $router -> render('pages/Catalogo', [
            'proyectos' => $proyectos,
            'ingresos' => $ingresos,
        ]);
    }

    /**
     * @param $router representa una instancia del objeto Router para acceder a sus métodos
     * 
     *  Renderiza la vista de cada proyecto y envia su informacion segun la ID correspondiente
     */
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
    
    /**
     * @param $router representa una instancia del objeto Router para acceder a sus métodos
     * 
     *  Renderiza la vista de crearProyecto
     */
    public static function crearProyecto(Router $router) {
        $router -> render('pages/CrearProyecto', []);
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