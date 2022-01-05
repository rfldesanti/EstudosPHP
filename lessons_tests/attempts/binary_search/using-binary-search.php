<?php

require 'geraValorAleatorio.php';
require 'binarySearch.php';

for($i = 0; $i <= 50; $i++) {
    $numeroAleatorio = geraValorAleatorio(100);
    $array[$i] = $numeroAleatorio;
    $array = array_unique($array);
}

sort($array);

echo "var_dump do array:" . PHP_EOL;
var_dump($array);

$valor = geraValorAleatorio(100);

echo "Valor selecionado: $valor" . PHP_EOL;

$posicaoValor = binarySearch($array, $valor);

if($posicaoValor) {
    echo "Valor na posição $posicaoValor";
} else {
    echo "Valor não está no array";
}