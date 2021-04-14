<?php
// arrays numericos
$carros = array(1=>"Fiat", 2=>"Gol", 3=>"Hilux"); // definindo o indise
$carros[] = "Amarok";
$carros[10] = "Camaro";
print_r($carros);

echo "<hr>";
$motos = array();
$motos[] = "Yamaha";
$motos[5] = "Suzuki";
print_r($motos);

echo "<hr>";
$clientes = ['Felipe', 'Cecília', 'Nataly'];
print_r($clientes);

echo "<hr>";
// Quantidades de array em um elemento count
$totalClientes = count($clientes);
echo 'Total de cliente: ' . $totalClientes;

echo "<hr>";
foreach ($carros as $valor) {
    echo $valor . "<br>";
}

echo "<hr>";
// arrays associativos
$pessoa = array("nome" => "Cristovão", "idade" => 28, "altura" => 1.69);
$pessoa["cidade"] = "Campina Grande";

foreach ($pessoa as $indice => $valor) {
    echo $indice . " : " . $valor . "<br>";
}

echo "<hr>";
// arrays multidimensionais
$times = array(
    "campinenses" => array("Campeão" =>"Campinense", "Vice-campeão" => "Treze"),
    "cariocas" => array("Vice-campeão" => "Vasco", "Campeão" => "Flamengo", "Terceiro" => "Botafogo"),
    "paulistas" => array("Campeão" => "Santos", "Vice-campeão" => "São Paulo", "Terceiro-lugar" => "Palmeiras")
);

echo $times["paulistas"]["Vice-campeão"];
echo "<hr>";
foreach ($times["paulistas"] as $indice => $valor) {
    echo $indice . " : " . $valor . "<br>";
}

echo "<hr>";
foreach ($times["cariocas"] as $indice => $valor) {
    echo $indice . " : " . $valor . "<br>";
}

echo "<hr>";
foreach ($times["campinenses"] as $indice => $valor) {
    echo $indice . " : " . $valor . "<br>";
}