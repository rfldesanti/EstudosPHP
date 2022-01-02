<?php

namespace Alura\Banco\Modelo;

trait AcessoPropriedades
{
    public function __get(string $nomeDoAtributo)
    {
        $metodo = 'recupera' . ucfirst($nomeDoAtributo);
        return $this->$metodo();
    }
}