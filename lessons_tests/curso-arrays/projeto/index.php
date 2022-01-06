<?php

namespace Alura;

require 'autoload.php';

$correntistas = [
    "Jose",
    "Maria",
    "Pedro",
];

$saldos = [
    35000,
    420,
    850,
];

$relacionados = array_combine($correntistas, $saldos);

var_dump($relacionados);

$correntistasAcimaValor = ArrayUtils::encontrarPessoasComSaldoMaior(3000, $relacionados);

var_dump($correntistasAcimaValor);