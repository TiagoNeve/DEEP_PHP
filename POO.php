<?php

/**
 *  PHP orientado a OBJETOS 
 * 
 * 
 */

class Person
{
    public $age; // Propriedade

    public function speak() // Método
    {
        echo 'Eae!';
    }
}

$tiago = new Person();
$tiago->age = 21;

echo $tiago->age;
$tiago->speak();


class Dog
{
    public $legs = 4;
    public function display()
    {
        echo $this->legs;
    }
}
$d1 = new Dog();
$d1->display();

$d2 = new Dog();
$d2->legs = 2;
$d2->display();


// PHP construtor de classes
class Person2
{
    public function __construct() // Essa função é chamada quando o objecto
    // é criado.
    {
        echo "Object created";
    }
}

$p = new Person2(); // Vai informa que o objeto está criado.

class Person3
{
    public $name;
    public $age;
    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function __destruct()
    {
        echo "Object created with sucessful.";
    }
}

$p1 = new Person3('Tiago', 21);
