<?php

define('TEMPLATES_URL', __DIR__ . '/templates');
define('FUNCIONES_URL', __DIR__ . 'funciones.php');
define('CARPETA_IMAGENES', $_SERVER['DOCUMENT_ROOT'] . '/images/');

/**
 * @param $nombre representa la ruta que se desea incluir
 * @param $principal se definde de manera predeterminada para indicar que la pagina no es el Index
 */
function incluirTemplate(string $nombre, bool $principal = false) {
    include TEMPLATES_URL . "/$nombre.php";
}


function isAuth(): void {
    session_start();

    if (!$_SESSION['login']) {
        header('Location: /');
    }
}

/**
 * @param $var representa cualquier tipo de variable que se desee debuguear
 */
function debug($var) {
    echo "<pre>";
    var_dump($var);
    echo "<pre>";
    exit;
}

/**
 * @param $html representa un código HTML al que se desea sanitizar
 * @return $htmlSanitizado retorna un html limpio de caracteres especiales
 */
function sanitizarHTML($html) {
    $htmlSanitizado = htmlspecialchars($html);
    return $htmlSanitizado;
}

/**
 * @param $codigo representa un parametro obtenido por GET
 * @return $mensaje retorna una alerta de confirmacion
 */
function mostrarNotificacion($codigo) {
    $mensaje = '';
    switch ($codigo) {
        case 1:
            $mensaje = 'Creado Correctamente!';
            break;
        case 2:
            $mensaje = 'Actualizado Correctamente!';
            break;
        case 3:
            $mensaje = 'Eliminado Correctamente!';
            break;
        default:
            $mensaje = false;
            break;
    }
    return $mensaje;
}

/**
 * @param $url representa la url a la que se desea extraer el parametro id
 * @return $id retorna el valor del parametro id de una URL
 */
function validarRedireccionar(string $url) {
    $id = $_GET['id'];
    $id = filter_var($id, FILTER_VALIDATE_INT);

    if (!$id) {
        header("Location: {$url}");
    }

    return $id;
}
