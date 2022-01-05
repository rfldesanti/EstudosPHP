<?php

namespace Alura;

class ArrayUtils
{
    public static function remover(string $elemento, array &$array)
    {
        $posicao = array_search($elemento, $array);
        var_dump($posicao);
        unset($array[$posicao]);
    }
}
