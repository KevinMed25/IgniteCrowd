<?php

    require 'funciones.php';
    require 'config/ConexionBaseDatos.php';
    require __DIR__.'/../vendor/autoload.php';

    use Model\ActiveRecord;

    //conectar a db
    $db = conectarBaseDatos();

    new ActiveRecord;
    ActiveRecord::setDb($db);

?>