<?php
/*
 * Operadores aritméticos
 * 
 * São usados com valores numéricos para executar operações
 * aritméticas comuns, como adição, subtração, multiplicação e etc...
 * 
 * adição +
 * subtração -
 * multiplicação *
 * divisão /
 * módulo %
 * exponenciação **
 */

$a = 10;
$b = 10;

$adicao = $a + $b;

var_dump($adicao);
echo "<hr>";

$subtracao = $a - $b;

print_r($subtracao);
echo "<hr>";

echo "<br>";
echo "A multiplicação entre os números 5 e 5 é: " . 5 * 5;
echo "<br>";
echo "A divisão entre os números 12 e 2 é: " . 12 / 2;
echo "<br>";
echo "O resto da divisão é: " . 12 % 5;
echo "<br>";
echo "A exponenciação de 3 elevado a 5 vai ser: " . 3 ** 5;
echo "<hr>";
echo number_format(7.4 + 5.5 + 8) / 3;
