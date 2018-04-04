<?php
require_once __DIR__ . '/../vehicles/IVehicle.php';
require_once __DIR__ . '/../vehicles/Vehicle.php';
require_once __DIR__ . '/../vehicles/Boat.php';
require_once __DIR__ . '/../vendor/autoload.php';

use PHPUnit\Framework\TestCase;

class BoatTest extends TestCase
{
	private $bmw;

	protected function setUp ()
    {
        parent::setUp();
        $this->boat = new Boat('boat');
    }

    public function testName()
    {
        $this->assertObjectHasAttribute('name', $this->boat);
        $this->assertEquals($this->boat->name, 'boat');
        $this->assertNotEquals($this->boat->name, 'bmw');
    }

    public function testVehicle(){
        $this->assertEquals($this->boat instanceof Vehicle, true);
    }

    public function testIVehicle(){
        $this->assertEquals($this->boat instanceof IVehicle, true);
    }
}