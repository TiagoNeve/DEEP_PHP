<?php
$names = array("David", "Tiago", "Karol");
echo $names[1];

// Arrays associativos - De Chave e valor

$people = array("David" => "27", "Amy" => "21", "John" => "42");
// OU
$people['David'] = "27";
$people['Amy'] = "21";
$people['John'] = "42";

echo $people['David'];

// Arrays Multi-Dimensionais
// Pode conter de dois arrays para cima.

$peoples = array(
    'online' => array('David', 'Amy'),
    'offline' => array('John', 'Rob', 'Jack'),
    'away' => array('Arthur', 'Daniel')
);

echo "<p>" . $peoples['online'][0] . "</p>";
