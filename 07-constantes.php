<?php
// Constantes
define("NOME", "José"); // OS IDENTIFICADOS DAS CONSTANTES SÃO SEMPRE EM MAIÚSCULAS
define("IDADE", 28);
define("ALTURA", 1.60);
define("CASADO", false);

echo 'Meu nome é ' . NOME . ', minha idade é ' . IDADE . ' anos e minha altura é ' . ALTURA . '.';

echo "<hr>";

define('TIMES', ['Vasco', 'Flamengo', 'Grêmio']);

echo TIMES[2];
echo "<hr>";
var_dump(TIMES);

echo "<hr>";

// não precisa define como global porquê constantes já são globais
function exibiNome() {
    echo NOME;
}

exibiNome();