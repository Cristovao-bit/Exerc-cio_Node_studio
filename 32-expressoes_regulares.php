<?php
/*
 * Expressões regulares
 * 
 * Define um padrão a ser usado para procurar ou substituir 
 * palavras ou grupos de palavras.
 * ^ inicio da expressão 
 * $ final da expressão
 * - /i -  case sensitive
 * [] conjunto de caracteres
 * {} ocorrências - ?{0,1} *{0,} +{1,} 0 é nem uma e vazio é várias
 * /^[a-z0-9.\-\_]+@[a-z0-9-\_]+\.(com|br|com.br|net)$/
 * /^[0-9]{2}\/[0-9]{2}\/[0-9]{4}$/
 * 
 * [A-Z] Letras maiúsculas
 * [a-z] letras minúsculas
 * [A-Za-z] letras maiúsculas e minúsculas
 * [A-Za-z0-9] letras e números
 * 
 * Case sensitive diferencia maiúsculas de minúsculas
 * Adicionando o "i" transformamos em case insensitive 
 * para não diferenciar maiúsculas de minúsculas
 */ 

$string = "ml.manutencaolira@gmail.com";
$padrão = "/^[a-z0-9.\-\_]+@[a-z0-9.\-\_]+\.(com|br|com.br|net)$/";

if(preg_match($padrão, $string)):
    echo "Válido";
    echo "<hr>";
    echo $string;
else:
    echo "Inválido";
    echo "<hr>";
endif;