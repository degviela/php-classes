<?php

abstract Class Animals
{
  public $name;
  protected $age = 0;

    function __construct($name, $age){
        $this->name = $name;
        $this->age = $age;
    }
}