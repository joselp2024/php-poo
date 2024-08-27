<?php
//una interfaz es un contrato
//Database, get , delete, sotre, edit, update
interface Person{
    public function getName(); 
}

class Admins implements Person{

    public $name;

    public function __construct($name){
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function greet(){
        return $this->name;
    }
}

$admin = new Admins("JSOEEE");
echo $admin->getName();