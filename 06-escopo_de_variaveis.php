<?php
// escopo global
$nome = "Cristovão L. Braga";
$a = 1;
$b = 3;
$c = 7;

function exibiNome() {
    global $nome;
    echo $nome;
}

exibiNome();

echo "<hr>";

function exibiCidade() {
    // Escopo local
    global $cidade;
    $cidade = 'Campina Grande';
}

exibiCidade();
echo $cidade;

echo "<hr>";

function soma() {
    echo $GLOBALS['a'] + $GLOBALS['b'] + $GLOBALS['c'];
}

soma();