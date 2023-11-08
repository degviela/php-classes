<?php

Class Cat {
    public $name;
    private $age = 0;

    function setName($name){
        $this->name = $name;
    }
    function getName(){
        return $this->name;
    }
    public function birthday(){
        $this->age++;
        echo "Age -" . $this->age;
    }
    static function moew(){
        echo "Meow!";
    }

}

?>