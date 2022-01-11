<?php

namespace Alura\Banco\Modelo;

abstract class Pessoa
{

    use AcessoPropriedades;
    protected $nome;
    private $cpf;

    public function __construct(string $nome, CPF $cpf)
    {
        $this->validaNome($nome);
        $this->nome = $nome;
        $this->cpf = $cpf;
    }

    public function recuperaNome(): string
    {
        return $this->nome;
    }

    public function recuperaCPF(): string
    {
        return $this->cpf->recuperaCPF();
    }

    final protected function validaNome(string $nomeTitular) {
        if(strlen($nomeTitular) < 5) {
            //echo "Quantidade de caracteres para nome precisa ser maior";
            throw new caracteresInsuficientesException($nomeTitular);
            //exit();
        }
    }
}