<?php 

namespace Controllers;

use MVC\Router;

class ControladorInicioSesion {

    public static function iniciarSesion(Router  $router) {
        $isRegistro = true;
        $router -> render('auth/IniciarSesion', [
            'isRegistro' => $isRegistro,
        ]);
    }

    public static function registro(Router  $router) {
        $isRegistro = true;
        $router -> render('auth/Registro', [
            'isRegistro' => $isRegistro,
        ]);
    }
}

?>