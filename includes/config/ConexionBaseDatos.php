<?php

/**
 * @return $baseDatos devuelve una instancia de la conexion a la base de datos
 */
function conectarBaseDatos() : mysqli {
    $baseDatos = new mysqli('localhost', 'root', 'root', 'ignitecrowd' , 3306);
    $baseDatos->set_charset("utf8");

    if($baseDatos->connect_error) {
        die("¡Error, no se pudo realizar la conexión!: " . $baseDatos->connect_error);
    }

    return $baseDatos;  
}

?>