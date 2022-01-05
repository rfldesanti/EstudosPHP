<?php

//php tem uma função nativa chamada array_search(); se possível, buscar o código-fonte dessa função.

function binarySearch(array $array, int $valor): ?int
{   
    $valorMinimo = 0;
    $valorMaximo = sizeof($array) - 1;
    $valorCentral = (int) (($valorMinimo + $valorMaximo) / 2);

    while (($array[$valorCentral] != $valor) and ($valorMaximo > $valorMinimo)) {

        echo "loop while 1" . PHP_EOL;
        echo "Valor central: $valorCentral" . PHP_EOL;
        echo "Valor minimo: $valorMinimo" . PHP_EOL;
        echo "Valor maximo: $valorMaximo" . PHP_EOL;

        if ($array[$valorCentral] > $valor) {
            $valorMaximo = $valorCentral - 1;
        } else if ($array[$valorCentral] < $valor) {
            $valorMinimo = $valorCentral + 1;
        }
        
        $valorCentral = (int) (($valorMinimo + $valorMaximo) / 2);

        echo "loop while 2" . PHP_EOL;
        echo "Valor central: $valorCentral" . PHP_EOL;
        echo "Valor minimo: $valorMinimo" . PHP_EOL;
        echo "Valor maximo: $valorMaximo" . PHP_EOL;
    }

    if ($array[$valorCentral] == $valor)
        return $valorCentral;
    else
        return null;
}