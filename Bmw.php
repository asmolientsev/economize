<?php 
class Bmw extends Vehicle {
    public function __construct($name){
        parent::__construct($name);
    }
    public function musicOn()
    {
        echo $this->name . ' music switched on ';
    }
    public function action(){
        $this->musicOn();
    }
}
?>