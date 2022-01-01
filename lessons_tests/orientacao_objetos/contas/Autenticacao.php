<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\Funcionario\Diretor;
use Alura\Banco\Service\Autenticador;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Modelo\Funcionario\Gerente;

$autenticador = new Autenticador();

$umDiretor = new Diretor(
    "Nome do Diretor",
    new CPF(
        "123.456.789=10"),
    30000
);

$umGerente = new Gerente(
    "Nome-do-gerente", 
    new CPF(
        "444.333.222-10"),
    18000
);

$umTitular = new Titular(
    new CPF(
        "003.005.004-11"),
    "UmNomeDeCliente",
    new Endereco(
        "Uma cidade",
        "Um bairro",
        "Uma Rua",
        "Um número"
    )
);

$autenticador->tentaLogin($umDiretor, "1234");
$autenticador->tentaLogin($umGerente, "4321");
$autenticador->tentaLogin($umTitular, "abcd");
