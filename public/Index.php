<?php 
    
    require_once __DIR__ .'/../includes/app.php';

    use Controllers\ControladorPaginas;
    use Controllers\ControladorInicioSesion;
    use MVC\Router;

    $router = new Router();

    //publicas
    $router->get('/', [ControladorPaginas::class, 'index']);

    $router->comprobarRutas();
?>