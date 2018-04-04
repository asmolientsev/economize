<?php
class Helicopter extends Vehicle {
    public function __construct($name){
        parent::__construct($name);
    }
    public function takeOff()
    {
        echo $this->name . ' took off ';
    }
    public function landing()
    {
        echo $this->name . ' landing ';
    }
    public function fly()
    {
        echo $this->name . ' flying ';
    }    
    public function action(){
        $this->takeOff();
        $this->fly();
        $this->landing();
    }
}
?>