<?php

class Titular {

    private $cpf;
    private $nome;

    public function __construct(CPF $cpf, string $nome) {

        $this->cpf = $cpf;
        $this->validaNomeTitular($nome);
        $this->nome = $nome;

    }

    public function recuperaCpf(): string {

        return $this->cpf->recuperaCPF();

    }

    public function recuperaNome(): string {

        return $this->nome;

    }

    private function validaNomeTitular(string $nomeTitular) {
        if(strlen($nomeTitular) < 5) {
            echo "Quantidade de caracteres para nome precisa ser maior";
            exit();
        }
    }

}