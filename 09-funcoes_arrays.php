<?php
/*
 * is_array($array) = Verifica se uma variável é realmente um array
 * in_array($valor, $array) = Verifica se um determinado valor existe em alguma posição de array
 * array_keys($array) = retorna um novo array com as chaves do array passado como parâmetro
 * array_values($array) = retorna um novo array com os valores do array passado como parâmetro
 * array_merge($array1, $array2) = agrega o conteúdo dos dois arrays
 * array_pop($array) = exclui a última posição do array
 * array_shift($array) = exclui a primeira posição do array
 * array_unshift($arr, "valor") = adicionar um ou mais elemento no início do array
 * array_push($array, "valor", "valor") = adiciona um ou mais elementos no final de um array
 * array_combine($keys, $values) = mescla os dois arrays passados
 * array_sum() = calcula a soma dos elementos de um array
 * explode("/", "23/03/2021") = transforma string em array
 * implode("-", $arr) = transforma array em string  
 */

$nomes = array("Felipe", "Gabriel", "José", "Cristovão");

if(is_array($nomes)):
    echo "É um array";
else:
    echo "Não é um array";
endif;

echo "<hr>";

$nomeProprios = array("Aluno01" => "André", "Aluno02" => "João", "Aluno03" => "Anderson");

if(in_array("Matheus", $nomeProprios)):
    echo "Sim, ele existe!";
else:
    echo "Não, ele não existe!";
endif;

echo "<hr>";
$keys = array_keys($nomeProprios);
var_dump($keys);

echo "<hr>";
$values = array_values($nomeProprios);
var_dump($values);

echo "<hr>";
$carros = array("Fiat", "Hilux", "Gol");
$motos = array("Pop100", "cb1000", "50cc");

$veiculos = array_merge($carros, $motos);
var_dump($veiculos);

echo "<hr>";
var_dump($carros);
echo array_pop($carros);
var_dump($carros);

echo "<hr>";
var_dump($motos);
echo array_shift($motos);
var_dump($motos);

echo "<hr>";
$frutas = array("Maça", "Uva", "Pera");
var_dump($frutas);
echo array_unshift($frutas, "Banana", "Caju", "Goiaba");
var_dump($frutas);

echo "<hr>";
$Legomes = array("Tomate", "Pimentão", "Cenoura");
var_dump($Legomes);
echo array_push($Legomes, "Alho", "Abóbora", "Batata Inglesa");
var_dump($Legomes);

echo "<hr>";
$key = array("Campeão", "Vice-campeão", "Terceiro");
$value = array("Flamengo", "Vasco", "Botafogo");

$times = array_combine($key, $value);
var_dump($times);

echo "<hr>";
$soma = array(7.8,5.5,10,7.2);
echo array_sum($soma);

echo "<hr>";
$data = "23/03/2021";
$novaData = explode('/', $data);
print_r($novaData);
echo "<br>";
$frase = "Meu nome não é johnny";
$array = explode(" ", $frase);
print_r($array);

echo "<hr>";
$nome = array("Eduardo", "Jaqueline", "Francisco");
$string = implode(", ", $nome);
echo $string;