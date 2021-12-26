<?php

require_once 'src/Conta.php';

$primeiraConta = new Conta("123.456.780-10", "SOLSTÍCIO");
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
$segundaConta = new Conta("456.789.10-11", "Alfredo");
//para exibir o atributo estático da classe:
echo Conta::recuperaNumeroDeContas() . PHP_EOL;
$terceiraConta = new Conta("898.787.115-32", "EQUADOR");
echo Conta::recuperaNumeroDeContas() . PHP_EOL;