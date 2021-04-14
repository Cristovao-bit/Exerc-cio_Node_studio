<?php
for($contador = 0; $contador <= 10; $contador++):
    echo "5 x $contador = " . ($contador * 5) . "<br>";
endfor;

echo "<hr>";

$cor = array("Verde", "Vermelho", "Azul", "Amarelo");

foreach ($cor as $indice => $valor):
    echo $indice . " - " . $valor . "<br>";
endforeach;