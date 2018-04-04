<?php
spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});
//-------------------------------------------------------------------------------------------------------------------------
$vehicles = [
    FactoryVehicle::createVehicle('bmw'), 
    FactoryVehicle::createVehicle('boat'), 
    FactoryVehicle::createVehicle('helicopter'), 
    FactoryVehicle::createVehicle('kamaz')
];

foreach($vehicles as $vehicle) {
    $vehicle->action();
	$vehicle->stop();
    $vehicle->refuel('gas');
}