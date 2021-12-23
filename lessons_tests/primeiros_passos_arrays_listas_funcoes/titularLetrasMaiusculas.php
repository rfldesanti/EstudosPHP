<?php

function titularLetrasMaiusculas(array &$conta)  {
    $conta['titular'] = mb_strtoupper($conta['titular']);
}