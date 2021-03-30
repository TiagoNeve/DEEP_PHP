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

// PHP Herança de classes
class Animal
{
    public $name;
    public function hi()
    {
        echo "Eae do animal";
    }
}

class Dog2 extends Animal
{ // extends -> Usado para herdar uma classe

}

$d3 = new Dog2();
$d3->hi();


// PHP Interfaces
/**
 * Uma interface específica uma lista de métodos que um classe deve
 * implementar. Basicamente você cria uma interface com métodos já
 * elaborados, e basta implementar essa interface na sua classe e dar
 * um real valor a essa interface.
 * 
 */

interface AnimalInterface
{
    public function makeSound();
}

class Dogao implements AnimalInterface
{
    public function makeSound()
    {
        echo "Woof! <br />";
    }
}

class Cat implements AnimalInterface
{
    public function makeSound()
    {
        echo "Meow! <br />";
    }
}

// Uma classe pode ter várias interfaces, basta separalas por virgulas.

// PHP Classes Abstratas
// Podem ter heranças, mas não podem ser instanciadas. Tem a habilidade
// de ter métodos e parâmetros estáticos que só podem ser herdados, mas
// nunca instanciados, dando uma proteção a mais no código.
// A classe que herdar um método abstrato, deve implementar todos os 
// métodos desta classe.

abstract class Fruit
{
    private $color;

    abstract public function eat();

    public function setColor($c)
    {
        $this->color = $c;
    }
}

class Apple extends Fruit
{
    public function eat()
    {
        echo "Omnomnom";
    }
}

$obj = new Apple();
$obj->eat();

// STATIC e FINAL
// Os métodos e as propriedades podem ter atributo static.
// Isso as torna capazes de serem chamadas sem precisar ter uma instância.

class myClass
{
    static $myStaticProperty = 42;

    static function myMethod()
    {
        echo self::$myStaticProperty;
    }
}

echo myClass::$myStaticProperty; // Scope resolution operator


myClass::myMethod();

// Palavra chave FINAL
/**
 *  Essa palavra chave define que um método ou atributo não pode ser
 * sobrescrevido em uma herança, limitando aquele método como a configuração
 * final.
 */

class myClass00
{
    final function myFuction()
    {
        echo 'Parent';
    }
}

class myClass002 extends myClass00
{
    // function myFuction() // O inteligin já mandou um erro aq.
    // {
    // }
}

// Se quiser que sua classe não tenha heranças, basta atribuir final na
// sua declaração.