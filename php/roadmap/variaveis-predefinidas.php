<?php

/**
 * Superglobais - 
 * Sempre estão disponíveis em todos os escopos.
 */
/**
 * $GLOBALS -> Referencia todas as variáveis no escopo global.
 * 
 */
$globalVariavel = 10;

echo $GLOBALS["globalVariavel"];
/**
 * $_SERVER -> Trás informações do servidor e ambiente de execução.
 * um array que pode receber as chaves de variáveis de ambiente.
 */
/**
 * $_GET -> Guarda todas as variáveis que são passadas no scopo, basta atribuir
 * a chave que ele retorna o valor dessa chave. Os valores são passados para o
 * get pela função urldecode();
 */
$_GET["name"];
/**
 * $_POST -> Array que guarda as chves e valores que forem passados via método
 * http post, utilizando 'application/x-www-form-urlencoded' ou 
 * 'nultipart/form-data'. 
 */
$_POST["name"];
/**
 * $_FILES -> Um array que guarda arquivos que são enviados pelo método POST 
 */
$_FILES["name"]["atributos"];
/**
 * $_REQUEST -> Um array que contêm informações do $_GET, $_POST e $_COOKIE.
 */

/**
 * $_SESSION -> Um array que contêm as variáveis de sessão do script atual
 */
