<?php
/*
 * Funções para números
 * 
 * number_format 
 * round - arredonda 
 * ceil - arredonda pra cima
 * floor - arredonda pra baixo
 * rand - sortea números
 */

$valor = 1234.56;
$preco = number_format($valor, 2, ",", ".");
echo "O valor da mensalidade é R$ $preco reais";

echo "<hr>";

echo round(3.6);

echo "<hr>";

echo ceil(3.10);

echo "<hr>";

echo floor(3.90);

echo "<hr>";

echo rand(1,20); // vai sortear entre 1 a 20 em ordem aleatória