<?php
/*
 * Funções para string
 * 
 * strtoupper - tudo em maiúsculas
 * strtolower - tudo em minúsculas
 * substr - retorna a partir da posição que você determinou no $start, 
 * também podemos determinar o comprimento da string
 * str_pad - pra da mais posição em uma palavra e ainda acrescentar mais coisas no texto
 * str_repeat - repetir a string
 * strlen - comprimento da palvra
 * str_replace - substituição de uma palvra em um texto
 * strpos - posição de uma palavra em um texto
 */

$nome = "cristovao l. braga";
$novoNome = strtoupper($nome);
echo $novoNome;

echo "<hr>";

$marca = "ARNO";
$novaMarca = strtolower($marca);
echo $novaMarca;

echo "<hr>";

$mensagem = "Olá mundo!";
echo substr($mensagem, 4, 5);

echo "<hr>";

$objeto = "mouse";
$novoObjeto = str_pad($objeto, 9, "****", STR_PAD_BOTH);
echo $novoObjeto;

echo "<hr>";

$string = str_repeat("Sucesso!", 5);
echo $string;

echo "<hr>";

$mensagem = "Olá mundo!";
echo strlen($mensagem);

echo "<hr>";

$texto = "A seleção argentina será campeã do mundo em 2022";
$novoTexto = str_replace("argentina", "brasileira", $texto);
echo $novoTexto;

echo "<hr>";

echo strpos($texto, "campeã");