<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\caracteresInsuficientesException;
use Alura\Banco\Modelo\Conta\ContaCorrente;
use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Modelo\CPF;

/*$depositante = new ContaCorrente(
    new Titular(
        new CPF("123.456.789-10"),
        "Jose da Silva",
        new Endereco(
            "Cidade",
            "Bairro",
            "Rua",
            "Numero")
        )
);*/
try {
    $depositante = new ContaCorrente(
        new Titular(
            new CPF("123.456.789-10"),
            "j",
            new Endereco(
                "Cidade",
                "Bairro",
                "Rua",
                "Numero")
            )
    );
    $depositante->depositar(-100);
} catch (InvalidArgumentException $exception) {
    //echo "Valor a depositar precisa ser positivo" . PHP_EOL;
    echo $exception->getMessage() . PHP_EOL;
} catch (caracteresInsuficientesException $exception) {
    echo $exception->getMessage() . PHP_EOL;
}

//tentando instanciar classe abstrata
//para verificar a mensagem padrão do erro
try {
    $conta = new Conta();
} catch (Throwable $error) {
    echo $error->getMessage();
}
//pesquisar mensagem padrão da classe Throwable