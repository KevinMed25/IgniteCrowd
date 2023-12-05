<?php

namespace Model;

class Usuario extends ActiveRecord {
    protected static $tabla = 'usuarios';
    protected static $columnasDB =['id','nombre','password', 'email', 'telefono', 'crowdfunder'];

    public $id;
    public $nombre;
    public $password;
    public $email;
    public $telefono;
    public $crowdfunder;
    
    /**
     * @param args representa un arreglo 
     */
    function __construct($args = []) {
        
        $this->id = $args['id'] ?? null;
        $this->nombre = $args['nombre'] ?? '';
        $this->password = $args['password'] ?? '';
        $this->email = $args['email'] ?? '';
        $this->telefono = $args['telefono'] ?? '';
        $this->crowdfunder = $args['crowdfunder'] ?? false; 

    }

    /**
     * @return $errores representa un arreglo en donde se almacenan los errores ocurridos.
     */
    public function validar() {
          
        if(!$this->nombre) {
            self::$errores[] = "Debes añadir tu nombre.";
        }   
        if(!$this->password) {
            self::$errores[] = "Debes añadir una contraseña";
        }  
        if(!$this->email) {
            self::$errores[] = "Debes añadir tu email.";
        }  
        if(!$this->telefono) {
            self::$errores[] = "Debes añadir tu teléfono.";
        }  
        return self::$errores;
    }

}
?>