<?php 

namespace Model;

class ActiveRecord {

    protected static $baseDeDatos;
    protected static $columnasDB =[];
    protected static $tabla = '';

    protected static $errores = [];
    
    /**
     * @param $database representa toda la base de datos
     */
    public static function setDb($database) {
        self::$baseDeDatos = $database;
    }

    public function guardar() {
        if (!is_null($this->id)) {
            $this->actualizar();
        } else {
            $this->crear();
        }
    }

   
    public function crear() {
        
        $datos =  $this->sanitizarDatos();
        $query = " INSERT INTO " . static::$tabla . " ( ";
        $query .= join(', ', array_keys($datos));
        $query .=" ) VALUES (' ";
        $query .= join("', '", array_values($datos));
        $query .= " ') ";
  
        $resultado = self::$baseDeDatos->query($query);

        if($resultado) {
            header('Location: /');
        }
    }
    
    public function actualizar() {
        $datos =  $this->sanitizarDatos();
        $valores = [];
        foreach($datos as $key => $value) {
            $valores[] = "{$key} = '{$value}'";
        }

        $query = "UPDATE " . static::$tabla . " SET ";
        $query .=  join(', ', $valores);
        $query .= " WHERE id = '".self::$baseDeDatos->escape_string($this->id)."' ";
        $query .= " LIMIT 1";            
        $resultado = self::$baseDeDatos->query($query);
        if($resultado) {
            header('Location: /');
        }
    }

    public function eliminar() {
        $query = "DELETE FROM  " . static::$tabla . " WHERE id = " . self::$baseDeDatos->escape_string($this->id) . " LIMIT 1";
        $resultado = self::$baseDeDatos->query($query);
        if($resultado) {
            $this -> borrarImagen();
            header('Location: /');
        }
    }


    /**
     * @return $sanitizado representa los datos que han pasado por un proceso de limpieza
     */
    public function sanitizarDatos() {
        $datos = $this->datos();
        $sanitizado = [];

        foreach($datos as $key => $value) { 
            $sanitizado[$key] = self::$baseDeDatos->escape_string($value);
        }

        return $sanitizado;
    }

    /**
     * @return $datos representa un arreglo con los datos solicitados
     */
    public function datos() {
        $datos = [];
        foreach(static::$columnasDB as $columna) {
            if ($columna === 'id') continue;
            $datos[$columna] = $this->$columna;
        }
        return $datos;
    }

    /**
     * @param $imagen representa la imagen a subir
     */
    public function setImagen($imagen) {
  
        if (!is_null($this->id)) {
            $this->borrarImagen();
        }

        if($imagen) {
            $this->portada = $imagen;
        }
    }

    public function borrarImagen() {
   
        $existeArchivo = file_exists(CARPETA_IMAGENES.$this->portada);
        if ($existeArchivo) {
            unlink(CARPETA_IMAGENES.$this->portada);
        }  
    }

    /**
     * @return $errores representa los errores a obtener.
     */
    public static function getErrores() {
        return static::$errores;
    }


    /**
     * @return $errores representa un arreglo que contiene los errores causados por la validación
     */
    public function validar() {
        static::$errores = []; 
        return static::$errores;
    }

    /**
     * @return $resultado respresenta la lista de todos los registros
     */
    public static function all() {
        $query = "SELECT * FROM " . static::$tabla;
        $resultado = self::consultarSQL($query);
        return $resultado;
    }  


    /**
     * @param $cantidad representa la cantidad de registros 
     * @return $resultado representa el determinado número de registros
     */
    public static function get($cantidad) {
        $query = "SELECT * FROM " . static::$tabla. " LIMIT ". $cantidad;
        $resultado = self::consultarSQL($query);
        return $resultado;
    }  

    /**
    * @param $query representa la consulta solicitada
    * @return $array representa un arreglo con las consultas a la base de datos
    */
    public static function consultarSQL($query) {
       
        $resultado = self::$baseDeDatos->query($query);

        $array = [];
        while($registro = $resultado->fetch_assoc()) {
            $array[] = static::crearObjeto($registro);
        }

        $resultado->free();
        return $array;
    }

    /**
     * @param $registro representa un registro de la base de datos
     * @return $objeto representa un objeto creado a partir del $registro
     */
    protected static function crearObjeto($registro) {
        $objeto = new static;
        foreach($registro as $key => $value) {
            if (property_exists($objeto, $key)) {
                $objeto->$key = $value;
            }
        }
        return $objeto;
    }

    /**
     * @param $id representa la clave del usuario
     * @return $resultado representa un arreglo con los registros que contenga ese $id
     */
    public static function find($id) {
        $query = "SELECT * FROM " . static::$tabla . " WHERE id = $id";
        $resultado = self::consultarSQL($query);
        return array_shift($resultado);
    }

    /**
     * @param $args representa un arreglo para sinconizar el objeto con los cambios realizados
     */
    public function sincronizar( $args = []) {
        foreach($args as $key => $value) {
            if (property_exists($this, $key) && !is_null($value)) { 
                $this->$key = $value;
            }  
        }
    }

}

?>