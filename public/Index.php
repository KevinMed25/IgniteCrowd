<?php 
    
    require_once __DIR__ .'/../includes/app.php';

    use Controllers\ControladorPaginas;
    use Controllers\ControladorInicioSesion;
    use MVC\Router;

    $router = new Router();

    //publicas
    $router->get('/', [ControladorPaginas::class, 'index']);
    $router->get('/Catalogo', [ControladorPaginas::class, 'catalogo']);
    $router->get('/CrearProyecto', [ControladorPaginas::class, 'crearProyecto']);
    $router->get('/PreguntasFrecuentes', [ControladorPaginas::class, 'preguntasFrecuentes']);
    $router->get('/AyudaAutores', [ControladorPaginas::class, 'ayudaAutores']);
    $router->get('/Ayuda', [ControladorPaginas::class, 'ayuda']);
    $router->get('/Cookies', [ControladorPaginas::class, 'cookiesPage']);

    //Inicio de sesion
    $router->get('/IniciarSesion', [ControladorInicioSesion::class, 'iniciarSesion']);
    $router->get('/Registro', [ControladorInicioSesion::class, 'registro']);
    

    $router->comprobarRutas();
?>