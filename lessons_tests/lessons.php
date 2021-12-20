<?php

//---------------------------------tipos de dados em php----------------------------------------------

//para descobrir o tipo de dado de uma variável, utilizamos gettype([variável_em_questao]);
//abaixo, os tipos primitivos do php:

$idade = 31;
$salario = 3890.75;
$texto = "Olá";
$verdadeiro = true;

// "\n" = quebra de linha
// "\t = TAB
//PHP_EOL = quebra de linha interna do php para poder lidar com diferentes sistemas operacionais

echo gettype($idade).       "\n";   //integer
echo gettype($salario).     "\n";   //double (float)
echo gettype($texto).       "\n";   //string
echo gettype($verdadeiro).  "\n";   //boolean

//-----------------------------trabalhando com strings------------------------------------------------

//para juntar textos a variáveis, utilizamos aspas simples para o texto e
// "." (ponto) para as variáveis:
echo 'Minha idade é '. $idade . ' anos ' . "\n";

//porém, quanto tivermos que concatenar muitas variáveis em um texto,
//devemos utilizar aspas duplas para o texto; dessa forma, o php
//irá conseguir identificar as variáveis
echo "Minha idade é $idade anos\n";

//utilizando TAB:
echo "Utilizando \t TAB \t aqui\n";

//utiiizando PHP_EOL:
echo "Vamos utilizar PHP_EOL".PHP_EOL;
echo PHP_EOL;

//tomando decisões
//operadores de comparação:
    //igualdade: ==
    //maior que: >
    //maior ou igual: >=
//operadores lógicos:
    //ou: ||
    //ou: or
    //e: and

//-----------------------------condicional-if-elseif-else------------------------------------------------

$idade = 18;
$nome = 'Vinicius';
$numeroDePessoas = 2;

echo "Você só pode entrar se tiver 18 anos ou mais ou se tiver 16 anos e estiver acompanhado" . PHP_EOL;

if ($idade >= 18 && $nome == 'Vinicius') {
//if ($idade > 18 || $idade == 18)
//if ($idade > 18 or $idade == 18)
//if ($idade >= 18)
//if ($idade >= 18 and $nome == 'Vinicius')
    echo "Você tem $idade anos. Pode entrar sozinho";
} else if ($idade >= 16 && $numeroDePessoas > 1) {
    echo "Você tem $idade anos e está acompanhado. Pode entrar";
} else if ($idade >= 16 && $numeroDePessoas <= 1) {
    echo "Você tem $idade anos e está sem companhia suficiente. Não pode entrar";
} else {
    echo "Você tem $idade anos. Não pode entrar";
}

//uma constatação importante sobre precedência de operadores:
echo PHP_EOL;

$x = TRUE;
$y = FALSE;
//com ||, $z = TRUE, já que || tem precedência sobre atribuição (=)
$z = $y || $x;

if($z)
    echo "z is TRUE";
else
    echo "z is FALSE";

//porém com OR, $z = FALSE, já que = tem precedência sobre OR
echo PHP_EOL;

$z = $y or $x;

if($z)
    echo "z is TRUE";
else
    echo "z is FALSE";

//uma boa prática é utilizar-se de parênteses para deixar explícita a relação entre z, x e y quanto utilizar OR:
echo PHP_EOL;

$z = ($y or $x); //$z = TRUE

if($z)
    echo "z is TRUE";
else
    echo "z is FALSE";

//operador ternário - muito utilizado para atribuir valor a uma variável conforme o valor da condição
//$variável = $condição ? $valorSeVerdadeiro : $valorSeFalso;

$mensagem = ($idade == 18) ? "Você tem 18 anos" : "Você  não tem 18 anos";
echo PHP_EOL . $mensagem;

//----------------testando operadores booleanos para comparações com variáveis de tipos diferentes-------------------
echo PHP_EOL;

//declarar uma string
$a_string = "a";
//declarar um int
$a_value = 0;

//atribuir a uma variável o valor da comparação entre o int e a string
$aOr0 = (0 == "a"); //true
//atribuir a uma variável o valor da comparação entre o int e a string
//fazendo a conversão da string para booleano
$aOr0_2 = (0 == (bool)"a"); //false

//qual valor será dado para cada uma das comparações?

//convertendo string em booleano
echo PHP_EOL . var_dump((bool) $a_string); //true
//convertendo int em booleano
echo PHP_EOL . var_dump((bool) $a_value); //false

//qual será o valor da comparação entre int e string SEM conversão para booleano
echo PHP_EOL . var_dump($aOr0); //true
//qual será o valor da comparação entre int e string COM A conversão para booleano
echo PHP_EOL . var_dump($aOr0_2); //false

//-----------------------------estruturas-de-repetição------------------------------------------------

//while
$contador = 1;

while($contador <= 15) {
    echo "#$contador" . PHP_EOL;
    $contador++;
}

//for

for($contador = 1; $contador <= 15; $contador++) {
    echo "#$contador" . PHP_EOL;
}

/*caso quisésSemos pular um valor da contagem, poderíamos inserir uma
condição if dentro do bloco de repetição e utilizar-se da palavra-chave
continue - assim o bloco segue sua execução sem realizar atividade nenhuma*/

for($contador = 1; $contador <= 15; $contador++) {
    if($contador == 13)
        continue;
    echo "#$contador" . PHP_EOL;
}

/*se fose o caso oposto, buscando finalizar a execução em algum valor, 
podemos quebrar o loop, utilizando a palavra-chave break*/

for($contador = 1; $contador <= 15; $contador++) {
    if($contador == 13)
        break;
    echo "#$contador" . PHP_EOL;
}