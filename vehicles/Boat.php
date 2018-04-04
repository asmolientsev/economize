<?php
class Boat extends Vehicle {
    public function __construct($name){
        parent::__construct($name);
    }
    public function swim()
    {
        echo $this->name . ' swimming ';
    }
    public function action(){
        $this->swim();
    }
}
?>