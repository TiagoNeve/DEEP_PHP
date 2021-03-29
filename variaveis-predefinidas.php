<?php
define('BR', "<br>");
function br()
{
    echo BR;
}
// As variáveis predefinidas são variáveis Superglobais
/**
 *  Essas variáveis sempre estarão disponíveis em qualquer parte do código
 *  as variáveis mais usadas são :
 *  $_SERVER -> É um array que contêm informações como HEADERS, PATHS,
 *  LOCAIS DE SCRIPTS. As entradas desse array é criada pelo web server.
 *  Para importar arquivos php para outros arquivos php, utiliza-se
 *  require 'path do arquivo.php';
 * 
 *  Principais elementos para o $_SERVER:
 *  $_SERVER['PHP_SELF'] -> Retorna o nome do arquivo.
 * 
 *  $_SERVER['SERVER_ADDR'] -> Retorna o endereço IP do servidor.
 * 
 *  $_SERVER['SERVER_NAME'] -> Retorna o nome do HOST servidor.
 * 
 *  ==================================================
 *  $GLOBALS -> 
 *  
 *  $_REQUEST -> 
 * 
 *  $_POST -> 
 * 
 *  $_GET -> 
 * 
 *  $_FILES -> 
 * 
 *  $_ENV -> 
 * 
 *  $_COOKIE -> 
 * 
 *  $_SESSION ->
 */


// $_SERVER
echo $_SERVER['SCRIPT_NAME']; // Retorna o caminho desse Script.
echo BR;
echo $_SERVER['HTTP_HOST']; // Retorna o HEAD na requisição atual.
/**
 * Esse método pode ser bom para conseguir linkar vários scripts
 * que estão organizados por pastas e subpastas.
 * $host = $_SERVER['HTTP_POST'];
 * $image_path = $host.'/images/';
 */
br();
echo $_SERVER['PHP_SELF']; // Retorna o nome do arquivo.
br();
echo $_SERVER['SERVER_ADDR'];
br();
echo $_SERVER['SERVER_NAME'];
br();
