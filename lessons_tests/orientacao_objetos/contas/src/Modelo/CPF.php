<?php

namespace Alura\Banco\Modelo;

class CPF {

    private $cpf;

    public function __construct(string $cpf) {

        $this->cpf = $cpf;

    }

    public function recuperaCPF(): string {

        return $this->cpf;
        
    }

}