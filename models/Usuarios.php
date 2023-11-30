<?php

namespace Model;

class Usuarios extends ActiveRecord {
    protected static $tabla = 'usuarios';
    protected static $columnasDB =['idusuarios','nombre','password', 'email', 'telefono', 'crowdfunder'];

    public $idusuarios;
    public $nombre;
    public $password;
    public $email;
    public $telefono;
    public $crowdfunder;
    
    function __construct($args = []) {
        
        $this->idusuarios = $args['idusuarios'] ?? null;
        $this->nombre = $args['nombre'] ?? '';
        $this->password = $args['password'] ?? '';
        $this->email = $args['email'] ?? '';
        $this->telefono = $args['telefono'] ?? '';
        $this->crowdfunder = $args['crowdfunder'] ?? false; 

    }

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