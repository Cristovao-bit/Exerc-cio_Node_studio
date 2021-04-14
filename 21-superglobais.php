<?php
/*
 * Super globais
 * 
 * $GLOBALS
 * $_SERVER - array com vários indices
 * $_REQUEST
 * $_POST
 * $_GET
 * $_FILES
 * $_ENV
 * $_COOKIE
 * $_SESSION
 */

$x = 10;
$y = 15;

function soma() {
    echo $GLOBALS['x'] + $GLOBALS['y'];
}

// soma();

echo "<hr>";

echo $_SERVER['PHP_SELF'] . "<br>";
echo $_SERVER['SERVER_SOFTWARE'] . "<br>";
echo $_SERVER['SERVER_PROTOCOL'] . "<br>";
echo "Porta do servidor: " . $_SERVER['SERVER_PORT'] . "<br>";
echo $_SERVER['SERVER_NAME'] . "<br>";

// VEJA MAIS: https://www.php.net/manual/en/reserved.variables.server.php

