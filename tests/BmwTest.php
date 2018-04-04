<?php
require_once __DIR__ . '/../vehicles/IVehicle.php';
require_once __DIR__ . '/../vehicles/Vehicle.php';
require_once __DIR__ . '/../vehicles/Bmw.php';
require_once __DIR__ . '/../vendor/autoload.php';

use PHPUnit\Framework\TestCase;

class BmwTest extends TestCase
{
	private $bmw;

	protected function setUp ()
    {
        parent::setUp();
        $this->bmw = new Bmw('bmw');
    }    

    public function testName()
    {
        $this->assertObjectHasAttribute('name', $this->bmw);
        $this->assertEquals($this->bmw->name, 'bmw');
        $this->assertNotEquals($this->bmw->name, 'boat');
    }

}