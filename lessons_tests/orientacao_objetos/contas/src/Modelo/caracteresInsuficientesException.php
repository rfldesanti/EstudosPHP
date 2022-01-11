<?php

namespace Alura\Banco\Modelo;

class caracteresInsuficientesException extends \DomainException
{
    public function __construct(string $nome)
    {
        $mensagem = "Nome \"$nome\" não possui número de caracteres suficientes para cadastro";
        parent::__construct($mensagem);
    }
}