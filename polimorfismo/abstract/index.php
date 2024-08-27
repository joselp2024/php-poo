<?php

abstract class Base
{
    protected $name;

    protected function getClassName()
    {
        return get_called_class();
    }

    public function login()
    {
        return "Mi nombre es $this->name desde la clase {$this->getClassName()}";
    }

    // Agregado el método store en la clase base
    abstract public function store();
}

class Admin extends Base
{
    public function __construct($name)
    {
        $this->name = $name;
    }

    // Implementación del método store en la clase Admin
    public function store()
    {
        return "Método store implementado en Admin.";
    }
}

class User extends Base
{
    public function __construct($name)
    {
        $this->name = $name;
    }

    // Implementación del método store en la clase User
    public function store()
    {
        return "Método store implementado en User.";
    }
}

class Guest extends Base
{
    protected $name = 'Invitado';

    // Implementación del método store en la clase Guest
    public function store()
    {
        return "Método store implementado en Guest.";
    }
}

// Ejemplo de uso
$admin = new Admin('Lynda');
echo $admin->login();
echo $admin->store();

$user = new User('Italo');
echo $user->login();
echo $user->store();

$guest = new Guest();
echo $guest->login();
echo $guest->store();
