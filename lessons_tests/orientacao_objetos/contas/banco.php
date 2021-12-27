<?php

require_once 'src/Conta.php';
require_once 'src/Titular.php';
require_once 'src/CPF.php';
//Com a classe Titular sendo atributo da classe Conta, o método
//de criação de conta abaixo fica obsoleto:
//$primeiraConta = new Conta("123.456.780-10", "SOLSTÍCIO");
//com a criação da classe CPF, agora Titular é uma nova variável, que cria
//um objeto CPF e depois serve de parâmetro para construção do objeto Conta
//$primeiraConta = new Conta(new Titular("123.456.780-10", "SOLSTICIO"));
$correntista = new Titular(new CPF("123.456.789-10"), "SOLSTICIO");
$primeiraConta = new Conta($correntista);
var_dump($primeiraConta);
echo PHP_EOL;
$primeiraConta->depositar(300);
var_dump($primeiraConta);
echo PHP_EOL;
$primeiraConta->sacar(500);
var_dump($primeiraConta);
echo PHP_EOL;
echo $primeiraConta->recuperaCpfTitular() . PHP_EOL;
echo $primeiraConta->recuperaNomeTitular() . PHP_EOL;
echo $primeiraConta->recuperaSaldo() . PHP_EOL;
//Com a classe Titular sendo atributo da classe Conta, o método
//de criação de conta abaixo fica obsoleto:
//$segundaConta = new Conta("456.789.10-11", "Alfredo");
//com a criação da classe CPF, agora Titular é uma nova variável, que cria
//um objeto CPF e depois serve de parâmetro para construção do objeto Conta
//$segundaConta = new Conta(new Titular("456.789.10-11", "Alfredo"));
$correntista2 = new Titular(new CPF("456.789.10-11"), "Alfredo");
$segundaConta = new Conta($correntista2);
//para exibir o atributo estático da classe:
echo Conta::recuperaNumeroDeContas() . PHP_EOL;
//Com a classe Titular sendo atributo da classe Conta, o método
//de criação de conta abaixo fica obsoleto:
//$terceiraConta = new Conta("898.787.115-32", "EQUADOR");
//com a criação da classe CPF, agora Titular é uma nova variável, que cria
//um objeto CPF e depois serve de parâmetro para construção do objeto Conta
//$terceiraConta = new Conta(new Titular("898.787.115-32", "EQUADOR"));
$correntista3 = new Titular(new CPF("898.787.115-32"), "EQUADOR");
$terceiraConta = new Conta($correntista3);
echo Conta::recuperaNumeroDeContas() . PHP_EOL;
unset($terceiraConta);
echo Conta::recuperaNumeroDeContas() . PHP_EOL;
