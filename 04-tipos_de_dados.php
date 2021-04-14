<?php
/********** escalares ********/

// tipo: string
$nome = "Cristovão L. Braga";

var_dump($nome);

if(is_string($nome)):
    echo "É uma string";
else:
    echo "Não é uma string";
endif;

echo "<hr>";

// inteiro
$idade = 28;

var_dump($idade);

if(is_int($idade)):
    echo "É um inteiro";
else:
    echo "Não é um inteiro";
endif;

echo "<hr>";

// float
$altura = 1.90;

var_dump($altura);

if(is_float($altura)):
    echo "É um float";
else:
    echo "Não é um float";
endif;

echo "<hr>";

// tipo: boolean
$admin = true;

var_dump($admin);

if(is_bool($admin)):
    echo "É um boolean";
else:
    echo "Não é um boolean";
endif;

echo "<hr>";

/********** compostos *********/
$carros = array("gol", "hilux", "nissan", 12, 30.1, true);

var_dump($carros);

if(is_array($carros)):
    echo "É um array";
else:
    echo "Não é um array";
endif;

echo "<hr>";

// object
class cliente {
    public $nome;
    public function atribuirNome($nome){
        $this->$nome = $nome;
    }
}

$cliente = new cliente();
$cliente->atribuirNome("Cristovão Lira");
var_dump($cliente);

if(is_object($cliente)):
    echo "É um object";
else:
    echo "Não é um object";
endif;

echo "<hr>";

/******** especiais ********/
$cidade = NULL;
var_dump($cidade);