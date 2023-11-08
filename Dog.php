<?php

require_once ("Animals.php");
Class Dog extends Animals
{
    public function birthday(){
        $this->age++;
        echo "Age -" . $this->age;
    }
    static function eat(){
        echo "I like Pedigree";
    }
}