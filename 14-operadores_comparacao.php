<?php
/*
 * Operadores de comparação
 * 
 * == é igual
 * != é diferente
 * === operadore de identidade - afirmando
 * !== operadore de identidade - negando
 * <> é diferente
 * <  é menor
 * > é maior
 * <= menor ou igual
 * >= maior ou igual
 * <=> space chip
 * 
 */

if(10 == 10):
    echo "Positivo";
else:
    echo "Negativo";
endif;

echo "<hr>";

if(10 != 11):
    echo "Positivo";
else:
    echo "Negativo";
endif;

echo "<hr>";

if(10 === "10"):
    echo "Positivo";
else:
    echo "Negativo";
endif;

echo "<hr>";

if(10 !== 11):
    echo "Positivo";
else:
    echo "Negativo";
endif;

echo "<hr>";

if(10 <> 11):
    echo "Positivo";
else:
    echo "Negativo";
endif;

echo "<hr>";

if(10 < 11):
    echo "Positivo";
else:
    echo "Negativo";
endif;

echo "<hr>";

if(10 > 9):
    echo "Positivo";
else:
    echo "Negativo";
endif;

echo "<hr>";

if(10 <= 11):
    echo "Positivo";
else:
    echo "Negativo";
endif;

echo "<hr>";

if(10 >= 11):
    echo "Positivo";
else:
    echo "Negativo";
endif;

echo "<hr>";

var_dump(20 <=> 20);  // se for igual vai apresentar 0

echo "<hr>";

var_dump(10 <=> 20); // se o lado esquerdo for menor vai apresentar -1

echo "<hr>";

var_dump(20 <=> 7); // se o lado esquerdo for maior vai apresentar 1