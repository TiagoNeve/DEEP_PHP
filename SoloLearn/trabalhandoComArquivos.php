<?php

/**
 *  Manipulação de arquivos. 
 * A função fopen(), cria ou abre um arquivo.
 * Utilize esses modos para abrir o arquivo: 
 * r -> Somente leitura
 * w -> Escrita somente
 * a -> Abre o arquivo para leitura somente e escrita, modo append.
 * x -> Cria um novo arquivo para leitura somente
 * r+ -> Abre o arquivo para leitura e escrita.
 * w+ -> Abre o aquivor para leitura e escrita, cria um novo se não existir.
 * a+ -> Abre o arquivo para leitura e escrita.
 * x+ -> Cria um novo arquivo para leitura e escrita.
 * 
 * 
 * Para escrever num arquivo utilize a função:
 * fwrite()
 * 
 * count() -> Retorna a quantidade de index em um array.
 */

$myFile = fopen('names.txt', 'w');

$txt = "Tiago\n";
fwrite($myFile, $txt);
$txt = "Karol\n";
fwrite($myFile, $txt);

fclose($myFile);

$read = file('names.txt'); // Função file retorna um ARRAY
foreach ($read as $line) {
    echo $line . ', ';
}
