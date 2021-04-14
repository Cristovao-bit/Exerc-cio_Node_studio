<?php
/*
 * Criando funções
 */

function exibirNome($nome) {
    echo "Meu nome é $nome";
}

exibirNome("Cristovão Lira Braga");

echo "<hr>";

function calcularMedia($nome, $n1, $n2, $n3, $n4) {
    $media = number_format(($n1 + $n2 + $n3 + $n4) / 4, 1);
    if($media >= 7):
        echo "$nome foi aprovado! Passou por media $media";
    else:
        echo "$nome foi reprovado!";
    endif;
}

calcularMedia("Cristovão", 5.5, 7, 8, 7.5);