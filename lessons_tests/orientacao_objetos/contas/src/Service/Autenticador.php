<?php

namespace Alura\Banco\Service;

use Alura\Banco\Modelo\Autenticavel;

class Autenticador
{
    public function tentaLogin(Autenticavel $autenticavel, string $senha): void
    {
        if ($autenticavel->podeAutenticar($senha)) {
            echo "Ok - usuário logado no sistema" . PHP_EOL;
        } else {
            echo "Senha incorreta" . PHP_EOL;
        }
    }
}