<?php

require_once ("Animals.php");
Class Cat
{

    function __construct(){
        echo "Puss in Boots";
    }
    public function birthday(){
        $this->age++;
        echo "Age -" . $this->age;
    }
    static function eat(){
        echo "I like whiskas!";
    }
}

?>