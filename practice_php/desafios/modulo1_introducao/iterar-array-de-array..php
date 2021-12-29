<?php

$array = ['a' => [1, 2, 3], 'b' => [4, 5, 6]];

foreach($array as $letter => $value) {
    echo PHP_EOL;
    echo "array " . $letter . ": ";
    echo PHP_EOL;
    foreach($array[$letter] as $i => $value) {
        if($i == (count($array[$letter]) - 1)) {
            echo "chave: " . $i . " valor: " . $value . PHP_EOL;
        } else {
            echo "chave: " . $i . " valor: " . $value . ", " . PHP_EOL;
        }
    }
}