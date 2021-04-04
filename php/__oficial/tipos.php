<?php

/**
 *  Tipos: Inteiros
 *  
 *  1234 -> Decimal
 * 01234 -> Octal, sempre começam com o 0
 * 0x1A -> Hexadecimal, sempre começam com 0x
 * 0b11111111 -> Binário, sempre começam com 0b
 * 
 * 1_234_567 -> Nova notação a partir da versão 7.4.0 para ser mais legível
 * 
 * Se um número for muito grande, ele perde o atributo de inteiro e torna-se
 * float. max -> 2147483647 -> Em sistemas de 32 bits
 *        max -> 9223372036854775807 -> Em sistemas de 64 bits
 * Para poder forçar uma mudança de tipo, basta colocar um (tipo) antes do
 * processo, por exemplo : (int) (25/7) -> retorna um 3, pois pega o valor
 * inteiro. Para arredondar, basta utilizar a função round().
 * 
 * Quando se utiliza um modificador de tipo de ponto flutuante para inteiro e 
 * esse ponto flutuante estiver acima do limite de um inteiro ao ser convertido
 * o retorno será 0, aparti do PHP 7.0
 */
/**
 * Tipo: Números de pontos flutuantes
 * 
 * Nunca confie em número de pontos flutuantes, pois os mesmo não tem precisões
 * bem definidas.
 * 
 * Nas conversões de números para float, o número primeiro é convertido para 
 * inteiro e depois é convertido para float, por tanto os valores das conversões
 * podem não ser precisas (Nunca confie em números de pontos flutuantes PHP)
 * 
 * Para verificar se uma variável é número ou não, deve-se utilizar a função
 * is_nan();
 */
