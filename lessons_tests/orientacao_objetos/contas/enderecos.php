<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Modelo\Funcionario\Desenvolvedor;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\AcessoPropriedades;

$umEndereco = new Endereco(
    "Cidade1",
    "Bairro1",
    "Rua1",
    "numero1"
);

$outroEndereco = new Endereco(
    "Cidade2",
    "Bairro2",
    "Rua2",
    "numero2"
);

$desenvolvedor = new Desenvolvedor(
    "Desenvolvedor",
    new CPF(
        "123.456.789-10"),
    15000
);

echo $umEndereco . PHP_EOL;
echo $outroEndereco . PHP_EOL;
echo $umEndereco->rua . PHP_EOL;
echo $outroEndereco->cidade . PHP_EOL;
$outroEndereco->cidade = "Algum outro lugar";
echo $outroEndereco->cidade . PHP_EOL;
echo $outroEndereco . PHP_EOL;
echo $desenvolvedor->salario;