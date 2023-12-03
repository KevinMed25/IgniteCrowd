<?php 

namespace Controllers;

use Model\Sesion;
use MVC\Router;

class ControladorInicioSesion {

    public static function iniciarSesion(Router  $router) {
        $isRegistro = true;

        $errores = [];

        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $auth = new Sesion($_POST);
            $errores = $auth->validar();

            if(empty($errores)) {
                //Verificar si el usuario existe:
                $resultado = $auth->existeUsuario();
                if(!$resultado) {
                    $errores = Sesion::getErrores();
                } else { // en caso de que exista:
                    //Verificar password
                    $autenticado = $auth->comprobarPassword($resultado);

                    if($autenticado) {
                        //Autenticar usuario
                        $auth->autenticar();
                    } else {
                        $errores = Sesion::getErrores();
                    }
                }
            }
        }
        
        $router -> render('auth/IniciarSesion', [
            'isRegistro' => $isRegistro,
            'errores' => $errores,
        ]);
    }

    public static function registro(Router  $router) {
        $isRegistro = true;
        $router -> render('auth/Registro', [
            'isRegistro' => $isRegistro,
        ]);
    }

    public static function cerrarSesion(Router $router) {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        $_SESSION = [];
        header('Location: /');
    }


}

?>