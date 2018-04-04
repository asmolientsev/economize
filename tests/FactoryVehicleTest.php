<?php
require_once __DIR__ . '/../vehicles/IVehicle.php';
require_once __DIR__ . '/../vehicles/Vehicle.php';
require_once __DIR__ . '/../vehicles/Bmw.php';
require_once __DIR__ . '/../vehicles/Boat.php';
require_once __DIR__ . '/../vehicles/Kamaz.php';
require_once __DIR__ . '/../vehicles/DecoratorMove.php';
require_once __DIR__ . '/../vehicles/FactoryVehicle.php';
require_once __DIR__ . '/../vendor/autoload.php';

use PHPUnit\Framework\TestCase;

class FactoryVehicleTest extends TestCase {

	public function testGenerate()
    {
    	$this->assertEquals(FactoryVehicle::createVehicle('bmw') instanceof DecoratorMove, true);
    	$this->assertNotEquals(FactoryVehicle::createVehicle('bmw') instanceof Bmw, true);
    	$this->assertEquals(FactoryVehicle::createVehicle('boat') instanceof Boat, true);
    	$this->assertNotEquals(FactoryVehicle::createVehicle('kamaz') instanceof Kamaz, true);
    }


}