<?php
spl_autoload_register(function ($class_name) {
    $file = __DIR__ . '/vehicles/' . str_replace('\\', '/', $class_name) . '.php';
    if (file_exists($file)) {
        include_once $file ;
    }
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