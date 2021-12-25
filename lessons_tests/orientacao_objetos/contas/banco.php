<?php

require_once 'src/Conta.php';

$primeiraConta = new Conta();
var_dump($primeiraConta);
echo PHP_EOL;
$primeiraConta->depositar(300);
var_dump($primeiraConta);
echo PHP_EOL;
$primeiraConta->sacar(500);
var_dump($primeiraConta);