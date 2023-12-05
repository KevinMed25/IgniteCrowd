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
     * @return $resultado devuelve el objeto que representa el conjunto de resultados de la consulta.
     */
    public function existeUsuario() {
        $query = "SELECT * FROM ". self::$tabla . " WHERE email = '" . $this->email ."' LIMIT 1"; 
        $resultado = self::$baseDeDatos->query($query);

        if(!$resultado->num_rows) {
            self::$errores[] = "El usuario no existe";
            return;
        }
        return $resultado;
    }

    /**
     * @param $resultado representa los resultados de la consulta
     * @return $autenticado representa la autenticación del password
     */
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

    /**
     * @return $errores representa un arreglo en donde se almacenan los errores ocurridos.
     */
    public function validar() {
            
        if(!$this->password) {
            self::$errores[] = "Debes añadir una contraseña";
        }  
        if(!$this->email) {
            self::$errores[] = "Debes añadir tu email.";
        }  
 
        return self::$errores;
    }

}
?>