<?php
class Kamaz extends Vehicle {
    public function __construct($name){
        parent::__construct($name);
    }
    public function emptyLoads() 
    {
        echo $this->name . ' empty ';
    }
    
    public function action(){
        $this->stop();
        $this->emptyLoads();
    }
}
?>
