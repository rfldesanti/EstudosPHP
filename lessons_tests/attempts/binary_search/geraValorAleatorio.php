<?php

function geraValorAleatorio(int $valorMaximo): int
{
    return random_int(0, $valorMaximo);
}