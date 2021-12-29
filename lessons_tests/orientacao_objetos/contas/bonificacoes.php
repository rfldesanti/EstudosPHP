<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Funcionario;
use Alura\Banco\Service\ControladorDeBonificacao;
use Alura\Banco\Modelo\CPF;

$umFuncionario = new Funcionario(
    "Funcionario", 
    new CPF(
        "002.004.005-12"),
    "Almoxarife",
    1000
);

$novoFuncionario = new Funcionario(
    "NovoFuncionario", 
    new CPF(
        "004.005.006-20"),
    "Novato",
    3000
);

$controlador = new ControladorDeBonificacao();
$controlador->adicionaBonificacaoDe($umFuncionario);
$controlador->adicionaBonificacaoDe($novoFuncionario);

echo $controlador->recuperaTotalBonificacao();