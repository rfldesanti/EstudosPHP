<?php

class Calculadora
{
    public function calculaMedia(array $notas): ?float
    {

        $totalElementosDoArray = sizeof($notas);
        
        if ($totalElementosDoArray > 0) {

            $soma = 0;
            for ($i = 0; $i < $totalElementosDoArray; $i++) {
                $soma = $soma + $notas[$i];
            }

            $media = $soma / $totalElementosDoArray;

            return $media;
        } else {
            return null;
        }
    }
}