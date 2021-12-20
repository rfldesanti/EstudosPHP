<?php

$peso = 50;
$altura = 1.58;

$imc = $peso / ($altura ** 2);

echo PHP_EOL . "| | | | | | | | | | | | | | |Seu IMC: $imc | | | | | | | | | | | | | ";
echo PHP_EOL . "-----------Classificacao IMC para peso $peso e altura $altura:---------------------" . PHP_EOL . PHP_EOL;

if ($imc < 18.5) {
    echo 'Abaixo do peso';
} else if ($imc >= 18.5 && $imc < 25) {
    echo 'Peso normal';
} else if ($imc >= 25 && $imc < 30) {
    echo 'Sobrepeso';
} else if ($imc >= 30 && $imc < 35) {
    echo 'Obesidade grau 1';
} else if ($imc >= 35 && $imc < 40) {
    echo 'Obesidade grau 2';
} else {
    echo 'Obsesidade grau 3 ou obesidade mórbida';
}

echo PHP_EOL;

