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
 *  $_SERVER['HTTP_HOST'] -> Retorna o HEAD do servidor;
 * 
 *  $_SERVER['REMOTE_ADDR'] -> Retorna o endereço IP que o usuário está vendo
 *  
 * $_SERVER['REMOTE_HOST'] -> Retorna o HOST que o usuário está vendo.
 * 
 * $_SERVER['REMOTE_PORT'] -> Retorna a PORT que o usuário está utilizando
 * para se comunicar com o servirdor.
 * 
 * $_SERVER['SCRIPT_FILENAME'] -> Retorna o caminho absoluto desse script.
 * 
 * $_SERVER['SERVER_PORT'] -> Retorna a PORT do servidor.
 * 
 * $_SERVER['SCRIPT_NAME'] -> Retorna o nome do script
 * 
 * $_SERVER['SCRIPT_URI'] -> Retorna a URI da pagina atual. 
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
echo $_SERVER['REMOTE_ADDR'];
br();
echo $_SERVER['REMOTE_HOST'];
br();
echo $_SERVER['REMOTE_PORT'];
br();
echo $_SERVER['SCRIPT_FILENAME'];
br();
echo $_SERVER['SCRIPT_URI'];
br();
echo $_SERVER; // É um array
br();

// =========================================
//           PHP FORMS
// =========================================
