<?php
// Variáveis
$name = 'Tiago Stuler';
$age = 21;
echo $name . " tem " . $age . " anos de idade";

// Constantes - Ao declarar uma constante não precisa uitilizar
// o sinal de dolar

define("name", "Tiago Maciel Neves");

echo "<h1>" . name . "</h1>";

// Variáveis pode armazenar diversos tipos de dados.

// Strings
$string1 = "String com dois colchetes ";
$string2 = 'String com um colchete';
// É possível concatenar strings utilizado o . 
echo $string1 . $string2;

// Integer
$int1 = 42;
$int2 = -42;

echo $int1 . " " . $int2;

// Float
$x = 42.168;

echo $x;

// Boolean 

$y = true;
$y2 = false;

echo $y . $y2;

// Soma de Strings e Intenger  
$str = "42";
$sum = $int1 + $str; // Dois números se somam, mesmo se for string.

echo '<p>' . $sum . '</p>';

$someString = "15";
$birthYear = 1982;

echo $someString + $birthYear;

// Variáveis de Escopo
/*
    Escopo global => São declaradas fora de alguma função ou classe
    Escopo Local => São declaradas dentro de funções e classe

    As variáveis globais não podem ser chamadas dentro de funções
    apenas podem utilizando o método global.
*/
$nameGlobal = 'Tiago';

function getName()
{
    global $nameGlobal;
    echo $nameGlobal;
}
echo "<p></p>";
getName();
echo "<p></p>";
// Variável de variável
$a = 'hello';
$hello = "h1";

echo $$a; // Puxa a variável com o mesmo valor, se existir
