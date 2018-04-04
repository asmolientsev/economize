<?php
class DecoratorMove  implements IVehicle {
    protected $_instance;
    public function __construct(IVehicle $instance){
        $this->_instance = $instance;
    }
    public function move()
    {
        echo $this->_instance->name . ' moveing ';
    }
    public function action(){
        $this->move();
        $this->_instance->action();
    }
    public function __get(string $name){
        if (property_exists($this->_instance, $name)) 
            return $this->_instance->$name;
        else
            return null;
    }
    public function __set(string $name , mixed $value){
        $this->_instance->$name = $value;
        return $this;
    }
    public function __call($method, $arguments){       
        if (is_callable(array($this->_instance, $method), true)) {
            return call_user_func_array(array($this->_instance, $method), $arguments);
        }
        throw new Exception(
            'Undefined method - ' . get_class($this->_instance) . '::' . $method
        );
    }
}
?>