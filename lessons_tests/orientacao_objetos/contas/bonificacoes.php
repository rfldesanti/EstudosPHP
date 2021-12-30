<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Funcionario\{Desenvolvedor, Diretor, Funcionario, Gerente};
use Alura\Banco\Service\ControladorDeBonificacao;
use Alura\Banco\Modelo\CPF;

$umFuncionario = new Desenvolvedor(
    "Funcionario", 
    new CPF(
        "002.004.005-12"),
    "Almoxarife",
    1000
);

$umFuncionario->sobeDeNivel();

$novoFuncionario = new Gerente(
    "NovoFuncionario", 
    new CPF(
        "004.005.006-20"),
    "Novato",
    3000
);

$maisFuncionario = new Diretor(
    "Diretor", 
    new CPF(
        "442.443.444-15"),
    "Diretor",
    26000
);



$controlador = new ControladorDeBonificacao();
$controlador->adicionaBonificacaoDe($umFuncionario);
$controlador->adicionaBonificacaoDe($novoFuncionario);
$controlador->adicionaBonificacaoDe($maisFuncionario);

echo $controlador->recuperaTotalBonificacao();