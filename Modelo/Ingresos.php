<?php
    class Ingresos extends ActiveRecord {
        protected static $tabla = 'ingresos';
        protected static $columnasDB =['idingresos','idusuarios','idproyectos','ingresos'];

        public $idingresos;
        public $idusuarios;
        public $idproyectos;
        public $ingresos;

        /**
         * @param args representa un arreglo 
         */
        
        function __construct($args = []) {
            
            $this->idingresos = $args['idingresos'] ?? null;  
            $this->idusuarios = $args['idusuarios'] ?? null;
            $this->idproyectos = $args['idproyectos'] ?? null;
            $this->ingresos = $args['ingresos'] ?? '';

        }

        public function validar() {
              
            // En este momento no podemos saber si hay que validar algo, tenemos que ver el comportamiento de los datos  
            
        }

    }
?>