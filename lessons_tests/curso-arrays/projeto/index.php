<?php

namespace Alura;

require 'autoload.php';

$correntistas = [
    "Giovanni",
    "João",
    17,
    "Maria",
    25,
    "Luis",
    "Luisa",
    "12"
];

echo "Pre unset:" . PHP_EOL;
var_dump($correntistas);

ArrayUtils::remover("Luis", $correntistas);

echo "Pos unset" . PHP_EOL;
var_dump($correntistas);

$calculadora = new Calculadora();
$calculadora2 = new Calculadora();