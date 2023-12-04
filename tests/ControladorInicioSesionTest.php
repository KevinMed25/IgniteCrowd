<?php
namespace Test;
use Controllers\ControladorInicioSesion;
use MVC\Router;
use Model\Sesion;
use PHPUnit\Framework\TestCase;

class ControladorInicioSesionTest extends TestCase{
    
    public function testIniciarSesion() {

        $routerMock = $this->createMock(Router::class);
        $routerMock->expects($this->once())
            ->method('render');
    
        $_POST['username'] = 'usuario_prueba';
        $_POST['password'] = 'contraseña_prueba';
    
        $sesionMock = $this->createMock(Sesion::class);
   
        $sesionMock->expects($this->atMost(1))
            ->method('validar')
            ->willReturn([]);
    
        $sesionMock->expects($this->atMost(1))
            ->method('existeUsuario')
            ->willReturn(true);
    
        $sesionMock->expects($this->atMost(1))
            ->method('comprobarPassword')
            ->with($this->equalTo(true)) 
            ->willReturn(true); 
    
        $controlador = new ControladorInicioSesion($sesionMock);
    
        $controlador->iniciarSesion($routerMock);
    }
    

    public function testRegistro() {

        $routerMock = $this->createMock(Router::class);
        $routerMock->expects($this->once())
            ->method('render')
            ->with(
                $this->equalTo('auth/Registro'),
                $this->equalTo(['isRegistro' => true])
            );

        ControladorInicioSesion::registro($routerMock);
    }
    

    public function testCerrarSesion() {
        $routerMock = $this->createMock(Router::class);

        ControladorInicioSesion::cerrarSesion($routerMock);

        $this->assertEmpty($_SESSION);
    }    
   
 
}
?>