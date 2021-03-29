<?php

/**
 *  Manipulação de arquivos. 
 * A função fopen(), cria ou abre um arquivo.
 * Utilize esses modos para abrir o arquivo: 
 * r -> Somente leitura
 * w -> Escrita somente
 * a -> Abre o arquivo para leitura somente
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
 * 
 */

$myFile = fopen('names.txt', 'w');

$txt = "Tiago\n";
fwrite($myFile, $txt);
$txt = "Karol\n";
fwrite($myFile, $txt);

fclose($myFile);
