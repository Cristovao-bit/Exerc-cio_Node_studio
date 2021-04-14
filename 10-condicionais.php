<?php
/*
 * condicionais
 * if
 * else
 * elseif
 */

$numero = 10;

if($numero == 10):
    echo "$numero é igual a 10";
endif;

echo "<br>";
$number = 15;

if($number == 10):
    echo "$number é igual a 10";
else:
    echo "$number é diferente de 10";
endif;

echo "<br>";
$Number = 12;

if($Number == 10):
    echo "$Number é igual a 10";
elseif ($Number >= 9):
    echo "$Number é Maior ou igual a 9";
else:
    echo "$Number é menor ou igual a 0";
endif;

echo "<hr>";
$media = 8.0;

echo ($media >= 7) ? 'Aprovado no exame!' : 'Reprovado no exame!';

echo "<hr>";
/*
 * switch
 * case
 */

$cor = "Roxo";

switch ($cor):
    case "Vermelha":
        echo "Sua cor preferida é Vermelho";
        break;
    
    case "Azul":
        echo "Sua cor preferida é Azul";
        break;
    
    case "Verde":
        echo "Sua cor preferida é Verde";
        break;
    
    default :
        echo "Sua cor preferida não é nem vermelho, nem verde e nem azul.";
endswitch;