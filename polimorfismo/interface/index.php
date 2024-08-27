<?php

interface Search
{
    public function all();
}

class User implements Search
{
    private $name;

    // Constructor que acepta un argumento
    public function __construct($name)
    {
        $this->name = $name;
    }

    public function all()
    {
        return "Obteniendo a los Users de {$this->name}, XML";
    }
}

class Post implements Search
{
    private $name;

    // Constructor que acepta un argumento
    public function __construct($name)
    {
        $this->name = $name;
    }

    public function all()
    {
        return "Obteniendo a los POSTS de {$this->name}, JSON";
    }
}

// Ejemplo de uso
$user = new User('John Doe');
echo $user->all(); // Imprime: Obteniendo a los Users de John Doe, XML

echo "\n"; // Salto de línea para mejor legibilidad

$post = new Post('My Blog');
echo $post->all(); // Imprime: Obteniendo a los POSTS de My Blog, JSON
