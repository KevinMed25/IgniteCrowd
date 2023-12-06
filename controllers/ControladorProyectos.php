<?php

namespace Controllers;

use MVC\Router;
use Intervention\Image\ImageManagerStatic as Image;
use Model\Proyecto;
use Model\Usuario;

class ControladorProyectos {

    /**
     * @param $router representa una instancia del objeto Router para acceder a sus métodos
     * 
     *  Renderiza la vista de crearProyecto
     */
    public static function crearProyecto(Router $router) {

        $proyecto = new Proyecto();
        $errores = Proyecto::getErrores();
        // debug($_SESSION);

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
            'errores' => $errores,
        ]);
    }
}

?>