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
/**
 * Tipo: String
 * 
 * São representadas em ASC por padrão, e podem ser representadas por:
 * 
 * Aspas simples: Recomendado para quando for querer mostrar exatamente o 
 * que está escrito, pois não reconhece caracteres especiais.
 * 
 * Aspas duplas: Reconhece os caracteres de escapes, mais recomendado para o 
 * dia a dia. Aceita algumas expressões regulares
 * 
 * Heredoc: Cria uma espécie de string de múltiplas linhas, em que se define
 * um <<<EOT aqui vem o conteúdo. EOT; Encerrando a string multínea. É possível
 * inserir variáveis no heredoc e também ele serve como argumentos de funções.
 * 
 * Nowdoc: Tem o mesmo propósito do Heredoc, porém ele trabalha como aspas 
 * simples, desta forma todos os caracteres especiais não serão renderizados
 * e a construção é igual ao do Heredoc, contudo o identificador deve estar
 * entre aspas simples <<<'EOT'.
 * 
 * Para declarar variáveis dentro de strings o recomendado é delimitar o nome
 * da variável entre chaves ${  }, desta forma o PHP não se engana e procura
 * a variável exato declarada.
 * 
 * A partir do PHP 7.1.0 é possível pegar caracteres através de index negativo
 * dessa forma pode buscar últimos valores de um array.
 * 
 * Strings podem ser concatenadas utilizando o . (ponto)
 * É possível modificar um valor em string utilizando o modificador (string) ou
 * a função strval() 
 */
/**
 *  Tipo: Array
 * Para criar um array pode utilizar a função array() ou colocar o array entre
 * [ ] colchetes, dessa forma pode atribuir arrays usando a notação 
 * chave => valor
 * Para retirar valores de um array utiliza a função unset()
 * Para reindexação de um array utilize a função array_values().
 * Para percorrer um array utilize a função foreach().
 * 
 * $cores = array ('vermelho', 'azul', 'verde', 'amarelo');
 * 
 * foreach($cores as $cor) {
 *      echo "Você gosta de ${cor}? \n";
 * }
 * 
 */
/**
 * Tipo: Iterables
 * 
 * Utilizados para gerar uma interação com o foreach
 */
/**
 * Tipo: Objetos
 * 
 * São instâncias de classes. Para modificar qualquer valor em objeto
 * basta adicionar (object).
 */
