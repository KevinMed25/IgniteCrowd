<?php

namespace Model;

class Sesion extends ActiveRecord {
    protected static $tabla = 'usuarios';
    protected static $columnasDB =['id','nombre','password', 'email', 'telefono', 'crowdfunder'];

    public $id;
    public $nombre;
    public $password;
    public $email;
    public $telefono;
    public $crowdfunder;
    
    function __construct($args = []) {
        
        $this->id = $args['id'] ?? null;
        $this->nombre = $args['nombre'] ?? '';
        $this->password = $args['password'] ?? '';
        $this->email = $args['email'] ?? '';
        $this->telefono = $args['telefono'] ?? '';
        $this->crowdfunder = $args['crowdfunder'] ?? false; 

    }

    public function existeUsuario() {
        $query = "SELECT * FROM ". self::$tabla . " WHERE email = '" . $this->email ."' LIMIT 1"; 
        $resultado = self::$baseDeDatos->query($query);

        if(!$resultado->num_rows) {
            self::$errores[] = "El usuario no existe";
            return;
        }
        return $resultado;
    }

    public function comprobarPassword($resultado) {
        $usuario = $resultado->fetch_object();
        $autenticado = password_verify($this->password, $usuario->password);

        if(!$autenticado) {
            self::$errores[] = "El password es incorrecto";
        }

        return $autenticado;
    }

    public function autenticar() {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        //Llenar arreglo de sesion:
        $_SESSION['usuario'] = $this->email;
        $_SESSION['login'] = true;
        
        header('Location: /');
    }

    public function validar() {
          
        // if(!$this->nombre) {
        //     self::$errores[] = "Debes añadir tu nombre.";
        // }   
        if(!$this->password) {
            self::$errores[] = "Debes añadir una contraseña";
        }  
        if(!$this->email) {
            self::$errores[] = "Debes añadir tu email.";
        }  
        // if(!$this->telefono) {
        //     self::$errores[] = "Debes añadir tu teléfono.";
        // }  
        return self::$errores;
    }

}
?>