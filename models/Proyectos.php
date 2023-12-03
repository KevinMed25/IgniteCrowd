<?php

namespace Model;

class Proyectos extends ActiveRecord {
    protected static $tabla = 'proyectos';
    protected static $columnasDB =['idproyectos','nombre_proyecto','descripcion', 'portada', 'img_descripcion', 'fecha_creacion'];

    public $idproyectos;
    public $nombre_proyecto;
    public $descripcion;
    public $portada;
    public $img_descripcion;
    public $fecha_creacion;

    
    /**
     * @param args representa un arreglo 
     */

    function __construct($args = []) {
        
        $this->idproyectos = $args['idproyectos'] ?? null;
        $this->nombre_proyecto = $args['nombre_proyecto'] ?? '';
        $this->descripcion = $args['descripcion'] ?? '';
        $this->portada = $args['portada'] ?? '';
        $this->img_descripcion = $args['img_descripcion'] ?? '';
        $this->fecha_creacion = $args['fecha_creacion'] ?? '';

    }

    /**
     * @return $errores devuelve el error asociado con la validación que no se cumple
     */

    public function validar() {
                
        if(!$this->nombre_proyecto) {
            self::$errores[] = "Debes de añadir un nombre para el proyecto.";
        }

        if((!$this->descripcion) && (strlen($this->descripcion) < 50)) {
            self::$errores[] = "Debes añadir una descripción y debe teener al menos 50 caracteres";
        }  

        if(!$this->portada) {
            self::$errores[] = "La portada es obligatoria";
        }

        if(!$this->img_descripcion) {
            self::$errores[] = "La imagen de la descripción es obligatoria ";
        }

        return self::$errores;
    }
}

?>