<?php

namespace Test;
use PHPUnit\Framework\TestCase;

class UsuarioTest extends TestCase{
    public function testConstructConArgumentosUsuarioTest() {
        $args = [
            'id' => 1,
            'nombre' => 'John Doe',
            'password' => 'password123',
            'email' => 'john@example.com',
            'telefono' => '123456789',
            'crowdfunder' => true,
        ];
    
        $usuario = new \Model\Usuario($args);
    
        $this->assertEquals($args['id'], $usuario->id);
        $this->assertEquals($args['nombre'], $usuario->nombre);
        $this->assertEquals($args['password'], $usuario->password);
        $this->assertEquals($args['email'], $usuario->email);
        $this->assertEquals($args['telefono'], $usuario->telefono);
        $this->assertEquals($args['crowdfunder'], $usuario->crowdfunder);
    }

    public function testValidarConDatosValidosUsuarioTest() {
        $args = [
            'nombre' => 'John Doe',
            'password' => 'password123',
            'email' => 'john@example.com',
            'telefono' => '123456789',
            'crowdfunder' => true,
        ];
    
        $usuario = new \Model\Usuario($args);
        $errores = $usuario->validar();
    
        $this->assertEmpty($errores);
    }

    public function testValidarConDatosInvalidosUsuarioTest() {
        $usuario = new \Model\Usuario(); // Usuario sin datos, debería generar errores
    
        $errores = $usuario->validar();
    
        $this->assertNotEmpty($errores);
        
        $this->assertContains("Debes añadir tu nombre.", $errores);
        $this->assertContains("Debes añadir una contraseña", $errores);
        $this->assertContains("Debes añadir tu email.", $errores);
        $this->assertContains("Debes añadir tu teléfono.", $errores);
    }
    
}

?>