<?php

class Car{
    public $brand;
    private $mileage = 0;

    function __construct($b, $m)
    {
        $this->brand=$b;
        $this->mileage=$m;
    }
    function __destruct()
    {
        echo $this->brand . " is dead";
    }

    public function makeNoise() {
        echo "Beep, beep!!";
    }
}