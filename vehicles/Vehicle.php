<?php
abstract class Vehicle implements IVehicle
{
    public $name;
    public function __construct($name)
    {
        $this->name = $name;
    }
	public function refuel($object) 
	{
		echo $this->name . ' refuel ' . $object;
	}
    public function stop() {
        echo $this->name . ' stopped ';
    }

    abstract public function action();
}
?>