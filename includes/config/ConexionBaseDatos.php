<?php

function conectarBaseDatos() : mysqli {
    $baseDatos = new mysqli('localhost', 'root', '', 'ignitecrowd' , 3306);
    $baseDatos->set_charset("utf8");

    if($baseDatos->connect_error) {
        die("¡Error, no se pudo realizar la conexión!: " . $baseDatos->connect_error);
    }

    //echo "Conexión exitosa";

    return $baseDatos;  
}

$conexion = conectarBaseDatos();

$conexion->close();  

?>