<?php
namespace Test;
use PHPUnit\Framework\TestCase;

class IngresosTest extends TestCase{

    public function testConstructConArgumentosIngresosTest() {
        $args = [
            'id' => 1,
            'idusuario' => 2,
            'idproyectos' => 3,
            'ingresos' => 1000,
        ];
    
        $ingreso = new \Model\Ingresos($args);
    
        $this->assertEquals($args['id'], $ingreso->id);
        $this->assertEquals($args['idusuario'], $ingreso->idusuario);
        $this->assertEquals($args['idproyectos'], $ingreso->idproyectos);
        $this->assertEquals($args['ingresos'], $ingreso->ingresos);
    }

    public function testConstructSinArgumentosIngresosTest() {
        $ingreso = new \Model\Ingresos();
    
        $this->assertNull($ingreso->id);
        $this->assertNull($ingreso->idusuario);
        $this->assertNull($ingreso->idproyectos);
        $this->assertSame('', $ingreso->ingresos);
    }

    public function testAsignacionDeValoresIngresosTest() {
        $ingreso = new \Model\Ingresos();
    
        $ingreso->id = 1;
        $ingreso->idusuarios = 2;
        $ingreso->idproyectos = 3;
        $ingreso->ingresos = 1000;
    
        $this->assertEquals(1, $ingreso->id);
        $this->assertEquals(2, $ingreso->idusuarios);
        $this->assertEquals(3, $ingreso->idproyectos);
        $this->assertEquals(1000, $ingreso->ingresos);
    }
}

?>