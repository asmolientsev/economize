<?php
class FactoryVehicle {
    static public function createVehicle($name){
        $classname = str_replace(' ','', ucwords(str_replace('-', ' ', $name)));
        $vehicle = new $classname($name);
        if($name == 'bmw' || $name == 'kamaz' || $name == 'harley-davidson')
            $vehicle = new DecoratorMove($vehicle);
        return $vehicle;
    }
}
?>