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
