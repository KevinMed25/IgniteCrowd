<?php 

namespace Controllers;

use MVC\Router;
use Intervention\Image\ImageManagerStatic as Image;
use Model\Proyecto;
use Model\Usuario;

class ControladorRegistro {
    
    /**
     * @param $router representa una instancia del objeto Router para acceder a sus métodos
     * 
     *  Se encarga de renderizar la vista Registro, y de registrar a un nuevo usuario
     */
    public static function crearUsuario(Router  $router) {
        $isRegistro = true;

        $errores = Usuario::getErrores();
        $usuario = new Usuario();

        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            
            $usuario = new Usuario($_POST['usuario']);
            $passwordHasheado =password_hash($usuario->password, PASSWORD_BCRYPT);
            $usuario->password = $passwordHasheado;
            // debug($usuario);
            
            $errores = $usuario->validar();
    
            if (empty($errores)) {
                $usuario->guardar();
            }
        }

        $router -> render('auth/Registro', [
            'isRegistro' => $isRegistro,
            'errores' => $errores,
            'usuario' => $usuario,
        ]);
    }


    public static function crearUsuarioxxsx(Router $router) {

        $proyecto = new Proyecto();
        $usuario = Usuario::all();
        $errores = Proyecto::getErrores();

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            //se crea instancia de proyecto
            $proyecto = new Proyecto($_POST['proyecto']); 
            
            //Generar nombre único:
            $nombreImg = md5(uniqid(rand(), true)) . ".jpg";  

            //setear imagen    
            if ($_FILES['proyecto']['tmp_name']['portada']) {
                //Realizar  resize a la imagen con inntervention image 
                $image = Image::make($_FILES['proyecto']['tmp_name']['portada'])->fit(430, 600);
                //set al nombre de la imagen
                $proyecto->setImagen($nombreImg); 
            }

            $errores = $proyecto->validar(); 
            if (empty($errores)) {
                //Crear carpeta para subir imagenes:
                if (!is_dir(CARPETA_IMAGENES)) { 
                    mkdir(CARPETA_IMAGENES);
                }
                //Guarda la img en el servidor:
                $image->save(CARPETA_IMAGENES . $nombreImg); 
                //Guardar en la base de datos la instancia del proyecto
                $proyecto->guardar(); 
            }
        }

        $router->render('pages/CrearProyecto', [
            'proyecto' => $proyecto,
            'usuario' => $usuario,
            'errores' => $errores,
        ]);
    }
}


?>