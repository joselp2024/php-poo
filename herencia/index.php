<?php

class User{
    public $name;

    public function __construct($name){
        $this->name = $name;
    }

    public function getName(){
        return $this->name; 
    }
}

class Admin extends USer{

}

$admin = new Admin("profe");
echo $admin->getName();