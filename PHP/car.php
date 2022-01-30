<?php

class car{

    public $id;
    public $license;
    public $driver;
    public $passengers;

    public function __construct($license, $driver){
        $this->license = $license;
        $this->driver= $driver;
    }

    public funtion printDataCar() {
        echo "licencia; $this->license Driver :".$this->driver->name
    }
    
}
?>