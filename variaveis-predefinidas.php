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
 * ====================================================
 *  $_POST -> Usado para enviar dados por dentro da página, mais seguro
 * Também usado para acessar os dados dinâmicos que estão acoplcados ness
 * array.
 * ===================================================
 *  $_GET -> Usado para acessar os dados que estão acoplados nessa variável
 * Super Global. 
 * 
 * =================================================
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
// O propósito das variáveis superglobais $_GET e $_POST é coletar
// os dados que são inputados num formulário.
?>
<form action="first.php" method="post">
    <p>Name: <input type="text" name="name" /></p>
    <p>Age: <input type="text" name="age" /></p>
    <p><input type="submit" name="submit" value="submit" /></p>
</form>
<?php
// Em php FORMS os métodos são arrays de CHAVE e VAlOR, em que a chave
// é o atributo name do input e o valor é o valor digitado pelo usuário.
?>
<form action="actionGet.php" method="get">
    Name: <input type="text" name="name" /><br />
    Age: <input type="text" name="age" /><br />
    <input type="submit" name="submit" value="submit" />
</form>
<?php
// Com o método GET os dados são enviados pela URL, não sendo útil para
// enviar dados sensíveis.

// SESSIONS

/**
 * Usando a SESSION, você pode guardar as informações das variáveis, para
 * ser usado em várias páginas.
 * Informações não são guardas no computador do usuário, embora exista os
 * cookies, sendo a utilização desses não recomendado.
 *  
 *  */

// A sessão começa ao chamar a função session_start();
session_start();
$_SESSION['color'] = 'red';
$_SESSION['name'] = 'John';

/**
 *  Para remover essas variáveis de sessões deve-se chamar a função
 * 
 * session_unset();
 * 
 * E para destruir a sessão:
 * 
 * session_destroy();
 * 
 */

/**
 * COOKIES: São freenquentementes utilizados para indentificar usuários.
 * Um cookie é um pequeno arquivo que o servidor incorpora no computador
 * do usuário, como um método para indentificar esse computador como se
 * fosse de um determinado usuário de seu banco de dados.
 * 
 * Quando o Computador acessa um endpoint é enviado também o Cookie pertecente aquele host.
 * Desta forma o PHP pode receber esse cookie e trata-lo. 
 * 
 * Para criar um cookie utiliza-se a função setcookie();
 * time() + 86400 * 30 -> Seta o intervalo do cookie por 30 dias.
 */

setcookie('teste', 'teste001', time() + 86400 * 30, '/', 'localhost', true, true); // Criando um cookie ao entrar nessa sessão.
if (isset($_COOKIE['teste'])) {
    echo "O valor é: " . $_COOKIE['teste'];
}
?>