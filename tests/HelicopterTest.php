<?php
require_once __DIR__ . '/../vehicles/IVehicle.php';
require_once __DIR__ . '/../vehicles/Vehicle.php';
require_once __DIR__ . '/../vehicles/Helicopter.php';
require_once __DIR__ . '/../vendor/autoload.php';

use PHPUnit\Framework\TestCase;

class HelicopterTest extends TestCase
{
	private $helicopter;

	protected function setUp ()
    {
        parent::setUp();
        $this->helicopter = new Helicopter('helicopter');
    }    

    public function testName()
    {
        $this->assertObjectHasAttribute('name', $this->helicopter);
        $this->assertEquals($this->helicopter->name, 'helicopter');
        $this->assertNotEquals($this->helicopter->name, 'boat');
    }

    public function testVehicle(){
    	$this->assertEquals($this->helicopter instanceof Vehicle, true);
    }

    public function testIVehicle(){
    	$this->assertEquals($this->helicopter instanceof IVehicle, true);
    }
}