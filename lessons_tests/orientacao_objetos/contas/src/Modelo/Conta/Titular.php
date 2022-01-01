<?php

namespace Alura\Banco\Modelo\Conta;

use Alura\Banco\Modelo\Pessoa;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Modelo\Autenticavel;

class Titular extends Pessoa implements Autenticavel
{
    //removendo nomve e cpf, pois já estão na classe Pessoa
    //private $cpf;
    //private $nome;
    private $endereco;

    public function __construct(CPF $cpf, string $nome, Endereco $endereco) {

        parent::__construct($nome, $cpf);
        //removendo as atribuições em razão da chamada ao construtor pai
        //$this->validaNomeTitular($nome);
        //$this->cpf = $cpf;
        //$this->nome = $nome;
        $this->endereco = $endereco;

    }

    //removendo os métodos que já estão na classe Pessoa
    /*public function recuperaCpf(): string {

        return $this->cpf->recuperaCPF();

    }*/

    //removendo os métodos que já estão na classe Pessoa
    /*public function recuperaNome(): string {

        return $this->nome;

    }*/

    //tranferindo essa função para a classe Pessoa
    /*private function validaNomeTitular(string $nomeTitular) {
        if(strlen($nomeTitular) < 5) {
            echo "Quantidade de caracteres para nome precisa ser maior";
            exit();
        }
    }*/

    public function recuperaEndereco(): Endereco
    {
        return $this->endereco;
    }

    public function podeAutenticar(string $senha): bool
    {
        return $senha === "abcd";
    }

}