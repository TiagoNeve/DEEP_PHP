<?php
// Operadores
/**
 *  + -> Soma
 *  - -> Subtração
 *  * -> Multiplicação
 *  / -> Divisão
 *  % -> Modulos
 */

$num1 = 8;
$num2 = 6;

echo $num1 + $num2;
echo "<p></p>";
echo $num1 - $num2;
echo "<p></p>";
echo $num1 * $num2;
echo "<p></p>";
echo $num1 / $num2;
echo "<p></p>";
echo $num1 % $num2;

// Incremento ou Decremento
$num1++; // Pós-incremento
$num1--; // Pós-decremento
++$num1; // Pre-incremento
--$num1; // Pre-decremento

// Operadores de assinação
$num1 += $num2;
$num1 -= $num2;
$num1 *= $num2;
$num1 /= $num2;
$num1 %= $num2;

// Operadoŕes de comparação

$num1 == $num2; // True se os valores são iguais
$num1 === $num2; // True se os valores e tipos são iguais
$num1 != $num2; // True se os valores não são iguais 
$num1 <> $num2; // True se os valores não são iguais
$num1 !== $num2; // True se os valores não são do mesmo tipo

$num1 > $num2; // Maior que
$num1 < $num2; // Menor que
$num1 >= $num2; // Maior ou igual
$num1 <= $num2; // Menor ou igual

// Operadores lógicos

$num1 and $num2; // True se os dois são trues
$num1 or $num2; // True se algun é true
$num1 xor $num2; // True apenas se um dos dois for true
$num1 && $num2; // Igual ao AND, True se os dois são true
$num1 || $num2; // igual ao OR, True se algum for true
!$num2; // Nega o valor que retorna
