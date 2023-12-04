<?php
namespace Test;

use Model\Sesion;
use PHPUnit\Framework\TestCase;

class SesionTest extends TestCase {

    function testConstructConArgumentosSesionTest() {
        $args = [
            'id' => 1,
            'nombre' => 'Usuario',
            'password' => 'contrasena',
            'email' => 'usuario@example.com',
            'telefono' => '123456789',
            'crowdfunder' => true,
        ];

        $sesion = new Sesion($args);

        $this->assertEquals($args['id'], $sesion->id);
        $this->assertEquals($args['nombre'], $sesion->nombre);
        $this->assertEquals($args['password'], $sesion->password);
        $this->assertEquals($args['email'], $sesion->email);
        $this->assertEquals($args['telefono'], $sesion->telefono);
        $this->assertEquals($args['crowdfunder'], $sesion->crowdfunder);
    }

    public function testConstructSinArgumentosSesionTest() {
        $sesion = new Sesion();

        $this->assertNull($sesion->id);
        $this->assertSame('', $sesion->nombre);
        $this->assertSame('', $sesion->password);
        $this->assertSame('', $sesion->email);
        $this->assertSame('', $sesion->telefono);
        $this->assertFalse($sesion->crowdfunder);
    }

    public function testValidarSesionTest() {

        $sesion = new Sesion([
            'password' => '', 
            'email' => '',   
        ]);

        $errores = $sesion->validar();

        $this->assertContains("Debes añadir una contraseña", $errores);

        $this->assertContains("Debes añadir tu email.", $errores);
    }
}
?>