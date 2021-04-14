<?php
/*
 * Operadores lógicos
 * 
 * Nos permitem fazer comparações entre expressões
 * e (&& - and) quando as duas expressões são verdadeiras
 * ou (|| - or) quando uma das expressões é verdadeira
 * ou exclusivo (xor) quando um é verdadeiro sem que seja os dois
 * negação (!) quando estou negando uma afirmação
 */
$nome = "Cristovão";
$idade = 28;

if(($nome == "Cristovão") && ($idade == 28)):
    echo "É verdadeiro";
else:
    echo "É falso";
endif;

echo "<hr>";

if(($nome == "Rodrigo") || ($idade == 28)):
    echo "É verdadeiro";
else:
    echo "É falso";
endif;

echo "<hr>";

if(($nome == "Cristovão") xor ($idade == 27)):
    echo "É verdadeiro";
else:
    echo "É falso";
endif;

echo "<hr>";

if(!($nome = "Cristovão") && ($idade = 28)):
    echo "É verdadeiro";
else:
    echo "É falso";
endif;