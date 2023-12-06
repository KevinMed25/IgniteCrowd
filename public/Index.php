<?php 
    
    require_once __DIR__ .'/../includes/app.php';

    use Controllers\ControladorPaginas;
    use Controllers\ControladorInicioSesion;
    use Controllers\ControladorProyectos;
    use Controllers\ControladorRegistro;
    use MVC\Router;

    $router = new Router();

    // Publicas
    $router->get('/', [ControladorPaginas::class, 'index']);
    $router->get('/Catalogo', [ControladorPaginas::class, 'catalogo']);
    $router->get('/Descripcion', [ControladorPaginas::class, 'descripcion']);
    $router->get('/PreguntasFrecuentes', [ControladorPaginas::class, 'preguntasFrecuentes']);
    $router->get('/AyudaAutores', [ControladorPaginas::class, 'ayudaAutores']);
    $router->get('/Ayuda', [ControladorPaginas::class, 'ayuda']);
    $router->get('/Cookies', [ControladorPaginas::class, 'cookiesPage']);

    // Proyectos
    $router->get('/CrearProyecto', [ControladorProyectos::class, 'crearProyecto']);
    $router->post('/CrearProyecto', [ControladorProyectos::class, 'crearProyecto']);

    
    // Regitro de usuarios
    $router->get('/Registro', [ControladorRegistro::class, 'crearUsuario']);
    $router->post('/Registro', [ControladorRegistro::class, 'crearUsuario']);

    // Inicio de sesion
    $router->get('/IniciarSesion', [ControladorInicioSesion::class, 'iniciarSesion']);
    $router->post('/IniciarSesion', [ControladorInicioSesion::class, 'iniciarSesion']);
    $router->get('/CerrarSesion', [ControladorInicioSesion::class, 'cerrarSesion']);

    $router->comprobarRutas();
?>