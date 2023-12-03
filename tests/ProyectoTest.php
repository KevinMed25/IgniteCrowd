<?php

namespace Test;
use PHPUnit\Framework\TestCase;

class ProyectoTest extends TestCase{

    public function testConstructConArgumentosProyectoTest() {
        $args = [
            'id' => 1,
            'nombre_proyecto' => 'Proyecto Test',
            'descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum fermentum odio a mattis ullamcorper. 
                              Pellentesque placerat lorem ac lorem scelerisque aliquam. Nulla a mauris sapien. Vivamus ac egestas nulla. 
                              Mauris sagittis dignissim sapien. Sed at quam auctor, rutrum massa tristique, tincidunt nisi. Maecenas ut rutrum orci. 
                              Proin euismod mi eget libero consequat, vel congue erat imperdiet. Nulla auctor, ipsum nec.',
            'total_a_financiar'=>'123.45',
            'portada' => 'portada.jpg',
            'img_descripcion' => 'descripcion.jpg',
            'categoria' => 'Manga',
            'ciudad' => 'Mérida',
            'fecha_creacion' => '2023-12-02 14:30:00'
        ];
    
        $proyecto = new \Model\Proyecto($args);
    
        $this->assertEquals($args['id'], $proyecto->id);
        $this->assertEquals($args['nombre_proyecto'], $proyecto->nombre_proyecto);
        $this->assertEquals($args['descripcion'], $proyecto->descripcion);
        $this->assertEquals($args['total_a_financiar'], $proyecto->total_a_financiar);
        $this->assertEquals($args['portada'], $proyecto->portada);
        $this->assertEquals($args['img_descripcion'], $proyecto->img_descripcion);
        $this->assertEquals($args['categoria'], $proyecto->categoria);
        $this->assertEquals($args['ciudad'], $proyecto->ciudad);

    }

    public function testValidarConDatosValidosProyectoTest() {
        $args = [
            'nombre_proyecto' => 'Proyecto Test',
            'descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum fermentum odio a mattis ullamcorper. 
                              Pellentesque placerat lorem ac lorem scelerisque aliquam. Nulla a mauris sapien. Vivamus ac egestas nulla. 
                              Mauris sagittis dignissim sapien. Sed at quam auctor, rutrum massa tristique, tincidunt nisi. Maecenas ut rutrum orci. 
                              Proin euismod mi eget libero consequat, vel congue erat imperdiet. Nulla auctor, ipsum nec.',
            'total_a_financiar'=>'123.45',
            'portada' => 'portada.jpg',
            'img_descripcion' => 'descripcion.jpg',
            'categoria' => 'Manga',
            'ciudad' => 'Mérida',
        ];
    
        $proyecto = new \Model\Proyecto($args);
        $errores = $proyecto->validar();
    
        $this->assertEmpty($errores);
    }

    public function testValidarConDatosInvalidosProyectoTest() {
        $proyecto = new \Model\Proyecto(); // Proyecto sin datos, debería generar errores
    
        $errores = $proyecto->validar();
    
        $this->assertNotEmpty($errores);
        
        $this->assertContains("Debes de añadir un nombre para el proyecto", $errores);
        $this->assertContains("Debes añadir una descripción y debe tener al menos 50 caracteres", $errores);
        $this->assertContains("El total a financiar es obligatorio", $errores);
        $this->assertContains("La portada es obligatoria", $errores);
        $this->assertContains("La imagen de la descripción es obligatoria", $errores);
        $this->assertContains("La categoría es obligatoria", $errores);
        $this->assertContains("La ciudad es obligatoria", $errores);

    }
}

?>