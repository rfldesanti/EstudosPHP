<?php

class Pessoa
{
    protected $nome;
    private $cpf;

    public function __construct(string $nome, CPF $cpf)
    {
        $this->validaNomeTitular($nome);
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

    protected function validaNomeTitular(string $nomeTitular) {
        if(strlen($nomeTitular) < 5) {
            echo "Quantidade de caracteres para nome precisa ser maior";
            exit();
        }
    }
}