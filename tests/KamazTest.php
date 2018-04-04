<?php
require_once __DIR__ . '/../vehicles/IVehicle.php';
require_once __DIR__ . '/../vehicles/Vehicle.php';
require_once __DIR__ . '/../vehicles/Kamaz.php';
require_once __DIR__ . '/../vendor/autoload.php';

use PHPUnit\Framework\TestCase;

class KamazTest extends TestCase
{
	private $kamaz;

	protected function setUp ()
    {
        parent::setUp();
        $this->kamaz = new Kamaz('kamaz');
    }    

    public function testName()
    {
        $this->assertObjectHasAttribute('name', $this->kamaz);
        $this->assertEquals($this->kamaz->name, 'kamaz');
        $this->assertNotEquals($this->kamaz->name, 'boat');
    }

    public function testVehicle(){
    	$this->assertEquals($this->kamaz instanceof Vehicle, true);
    }

    public function testIVehicle(){
    	$this->assertEquals($this->kamaz instanceof IVehicle, true);
    }
}