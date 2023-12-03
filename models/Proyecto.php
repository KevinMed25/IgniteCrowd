<?php

namespace Model;

class Proyecto extends ActiveRecord {
    protected static $tabla = 'proyectos';
    protected static $columnasDB =['idproyectos','nombre_proyecto','descripcion', 'total_a_financiar', 'portada', 'img_descripcion', 'categoria', 'ciudad', 'fecha_creacion'];

    public $idproyectos;
    public $nombre_proyecto;
    public $descripcion;
    public $total_a_financiar;
    public $portada;
    public $img_descripcion;
    public $categoria;
    public $ciudad;
    public $fecha_creacion;

    
    /**
     * @param args representa un arreglo 
     */

    function __construct($args = []) {
        
        $this->idproyectos = $args['idproyectos'] ?? null;
        $this->nombre_proyecto = $args['nombre_proyecto'] ?? '';
        $this->descripcion = $args['descripcion'] ?? '';
        $this->total_a_financiar = $args['total_a_financiar'] ?? 0;
        $this->portada = $args['portada'] ?? '';
        $this->img_descripcion = $args['img_descripcion'] ?? '';
        $this->categoria = $args['categoria'] ?? '';
        $this->ciudad = $args['ciudad'] ?? '';
        $this->fecha_creacion = $args['fecha_creacion'] ?? '';

    }

    /**
     * @return $errores devuelve el error asociado con la validación que no se cumple
     */

    public function validar() {
                
        if(!$this->nombre_proyecto) {
            self::$errores[] = "Debes de añadir un nombre para el proyecto";
        }

        if((!$this->descripcion) && (strlen($this->descripcion) < 50)) {
            self::$errores[] = "Debes añadir una descripción y debe tener al menos 50 caracteres";
        }  

        if(!$this->total_a_financiar) {
            self::$errores[] = "El total a financiar es obligatorio";
        } 

        if(!$this->portada) {
            self::$errores[] = "La portada es obligatoria";
        }

        if(!$this->img_descripcion) {
            self::$errores[] = "La imagen de la descripción es obligatoria";
        }

        if(!$this->categoria) {
            self::$errores[] = "La categoría es obligatoria";
        }

        if(!$this->ciudad) {
            self::$errores[] = "La ciudad es obligatoria";
        }

        return self::$errores;
    }
}

?>