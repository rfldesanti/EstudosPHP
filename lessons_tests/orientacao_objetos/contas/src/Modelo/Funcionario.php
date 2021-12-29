<?php

namespace Alura\Banco\Modelo;

class Funcionario extends Pessoa
{
    //removendo atributos que estão na classe Pessoa
    //private $nome;
    //private $cpf;
    private $cargo;

    public function __construct(string $nome, CPF $cpf, string $cargo)
    {
        parent::__construct($nome, $cpf);
        //removendo as atribuições em razão da chamada ao construtor pai
        //$this->validaNomeTitular($nome);
        //$this->nome = $nome;
        //$this->cpf = $cpf;
        $this->cargo = $cargo;
    }

    //removendo os métodos que já estão na classe Pessoa
    /*public function recuperaNome(): string
    {
        return $this->nome;
    }*/

    //removendo os métodos que já estão na classe Pessoa
    /*public function recuperaCpf(): string
    {
        return $this->cpf;
    }*/

    public function recuperaCargo(): string
    {
        return $this->cargo;
    }

    public function alteraNome(string $nome): void
    {
        $this->validaNomeTitular($nome);
        $this->nome = $nome;
    }
}