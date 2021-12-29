<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Conta\{Titular,
     ContaPoupanca, 
     ContaCorrente};
use Alura\Banco\Modelo\Conta\Conta;
use Alura\Banco\Modelo\{CPF, Endereco};

$conta = new ContaCorrente(
    new Titular(
        new CPF("123.456.789-10"),
            "Josézio",
        new Endereco("Torres",
            "Mar",
            "Praia",
            "48")
    ),
);

$conta2 = new ContaPoupanca(
    new Titular(
        new CPF("284.955.710-26"),
          "Honéstio",
        new Endereco(
            "Praia",
            "Lagoa",
            "Areia",
            "99"
        )
    ),
);

echo $conta2->recuperaCpfTitular() . PHP_EOL;
echo $conta2->recuperaNomeTitular() . PHP_EOL;

$conta2->depositar(500);
$conta2->sacar(100);

$conta->depositar(500);
$conta->sacar(100);

$conta->transferir(50, $conta2);

echo $conta->recuperaSaldo() . PHP_EOL;
echo $conta2->recuperaSaldo() . PHP_EOL;
