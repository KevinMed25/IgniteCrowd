<?php

namespace Model;

class Ingresos extends ActiveRecord {
    protected static $tabla = 'ingresos';
    protected static $columnasDB =['id','idusuario','idproyectos','ingresos'];

    public $id;
    public $idusuario;
    public $idproyectos;
    public $ingresos;

    /**
     * @param args representa un arreglo 
     */
    
    function __construct($args = []) {
        
        $this->id = $args['id'] ?? null;  
        $this->idusuario = $args['idusuario'] ?? null;
        $this->idproyectos = $args['idproyectos'] ?? null;
        $this->ingresos = $args['ingresos'] ?? '';

    }
}
?>