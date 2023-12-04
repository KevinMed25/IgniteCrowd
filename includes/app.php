<?php

    require 'funciones.php';
    require 'config/ConexionBaseDatos.php';
    require __DIR__.'/../vendor/autoload.php';

    use Model\ActiveRecord;

    $db = conectarBaseDatos();

    new ActiveRecord;
    ActiveRecord::setDb($db);

?>