<?php
// uma função é utilizada para evitar códigos repetidos.
function functionName()
{
}

function sayHello()
{
    echo 'Hello!';
}

sayHello();

// Parâmetros de funções
// Funções podem receber argumentos para que suas funcionalidades, sejam
// executadas com mais generalização.

function multiplyByTwo($number)
{
    $answer = $number * 2;
    echo "<br>" . $answer;
}

multiplyByTwo(3);

function multiply($num1, $num2)
{
    $answer = $num1 * $num2;
    echo "<br>" . $answer;
}
multiply(3, 6);

// É possível ter argumentos padrões no php, basta declarar um argumento com um valor já apresentado.
function setCounter($num = 10)
{
    echo "<br>Counter is " . $num;
}

setCounter(42);
setCounter();

// O retorno de uma função.
// Funções devem retornar algo, quando não retornam são tidas como procedimentos.

function mult($num1, $num2)
{
    $res = $num1 * $num2;
    return $res;
}

echo "<br>" . mult(5, 5);
