<?php
namespace Test;
use Controllers\ControladorPaginas;
use MVC\Router;
use Model\Ingresos;
use Model\Proyecto;
use Model\Usuario;
use PHPUnit\Framework\TestCase;

class ControladorPaginasTest extends TestCase{

    public function testCrearProyecto() {
        $router = $this->createMock(Router::class);
       
        $router->expects($this->once())
               ->method('render')
               ->with(
                   $this->equalTo('pages/CrearProyecto'),
                   $this->equalTo([])
               );

        ControladorPaginas::crearProyecto($router);
    }

    public function testPreguntasFrecuentes() {
        $router = $this->createMock(Router::class);
       
        $router->expects($this->once())
               ->method('render')
               ->with(
                   $this->equalTo('pages/PreguntasFrecuentes'),
                   $this->equalTo([])
               );

        ControladorPaginas::preguntasFrecuentes($router);
    }

    public function testAyudaAutores() {
        $router = $this->createMock(Router::class);
       
        $router->expects($this->once())
               ->method('render')
               ->with(
                   $this->equalTo('pages/AyudaAutores'),
                   $this->equalTo([])
               );

        ControladorPaginas::ayudaAutores($router);
    }

    public function testAyuda() {
        $router = $this->createMock(Router::class);
       
        $router->expects($this->once())
               ->method('render')
               ->with(
                   $this->equalTo('pages/Ayuda'),
                   $this->equalTo([])
               );

        ControladorPaginas::ayuda($router);
    }

    public function testCookiesPage() {
        $router = $this->createMock(Router::class);
       
        $router->expects($this->once())
               ->method('render')
               ->with(
                   $this->equalTo('pages/Cookies'),
                   $this->equalTo([])
               );

        ControladorPaginas::cookiesPage($router);
    }

}   
?>