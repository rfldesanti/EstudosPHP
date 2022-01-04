<?php

$nomes = "Giovanni, Giorgio, Mary, Lamb";

$nomes = explode(", ", $nomes);

var_dump($nomes);

foreach ($nomes as $nome) {
    echo $nome . PHP_EOL;
}

$nomesJuntos = implode("-", $nomes);

var_dump($nomesJuntos);