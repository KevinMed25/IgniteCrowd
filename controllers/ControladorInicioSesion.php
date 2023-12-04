<?php 

namespace Controllers;

use Model\Sesion;
use MVC\Router;

class ControladorInicioSesion {

    /**
     * @param $router representa una instancia del objeto Router para acceder a sus métodos
     * 
     *  Se encarga de validar el incio de sesion y renderizar su vista correspondiente
     */

    public static function iniciarSesion(Router  $router) {
        $isRegistro = true;

        $errores = [];

        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $auth = new Sesion($_POST);
            $errores = $auth->validar();

            if(empty($errores)) {
                $resultado = $auth->existeUsuario();
                if(!$resultado) {
                    $errores = Sesion::getErrores();
                } else {
                    $autenticado = $auth->comprobarPassword($resultado);
                    if($autenticado) {
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

    /**
     * @param $router representa una instancia del objeto Router para acceder a sus métodos
     * 
     *  Se encarga de renderizar la vista Registro
     */
    public static function registro(Router  $router) {
        $isRegistro = true;
        $router -> render('auth/Registro', [
            'isRegistro' => $isRegistro,
        ]);
    }

    /**
     * @param $router representa una instancia del objeto Router para acceder a sus métodos
     * 
     *  Vacia la superglobal $_SESSION y redirige a la pagina principal
     */
    public static function cerrarSesion(Router $router) {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        $_SESSION = [];
        header('Location: /');
    }


}

?>