<?php
session_start();
echo "Olá " . $_GET['name'] . ".";
echo "Você tem " . $_GET['age'] . ' anos de idade';

echo "Essa é uma variável de sessão: " . $_SESSION['name'];

session_unset();
session_destroy();
