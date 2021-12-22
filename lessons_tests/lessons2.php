<?php

include 'titularLetrasMaiusculas.php';

//-------------------------------------LISTA-DE-DADOS--------------------------------------------
//ARRAYS OU VETORES

//Duas formas de declarar array
$idadeList = array(12, 23, 45, 44, 18, 19, 26);
$idadesList = [12, 23, 45, 55, 18, 19, 16];     //essa é a forma atualmente utilizada

//acessando itens do array - utilizando o índice do array:
$primeiraIdade = $idadesList[2];

echo $primeiraIdade;

//Loop em array

for ($i = 0; $i < count($idadesList); $i++) {
    echo $idadesList[$i] . PHP_EOL;
}

//ARRAYS COM VÁRIAS INFORMAÇÕES

//Array associativo - é como um mapa, onde podemos definir nomes como índices(chaves) e 
//associar um valor a esses nomes\índices\chaves, sempre rodeados por colchetes

$conta1 = [
    'titular' => 'Rafael',
    'saldo' => 150000
];

$conta2 = [
    'titular' => 'Pincha',
    'saldo' => 306000
];

$conta3 = [
    'titular' => 'Onofrio',
    'saldo' => 600000
];

$contasCorrentes = [
    $conta1,
    $conta2,
    $conta3
];

//for each

foreach ($contasCorrentes as $conta) {
    echo $conta['titular'] . PHP_EOL;
}

//buscando valor do índice com foreach

$contasCorrentes2 = [
    33456491523 => $conta1,
    33456491524 => $conta2,
    33456915344 => $conta3
];

foreach ($contasCorrentes2 as $cpf => $conta) {
    echo $cpf . PHP_EOL;
}

//remodelando o array de contasCorrentes e os de contas inidividuais

$contasCorrentes3 = [
    33456491523 => [
        'titular' => 'Rafael',
        'saldo' => 150000
    ],
    33456491524 => [
        'titular' => 'Pincha',
        'saldo' => 306000
    ],
    33456915344 => [
        'titular' => 'Onofrio',
        'saldo' => 600000
    ]
];

foreach ($contasCorrentes3 as $cpf => $conta) {
    echo $cpf . " " . $conta['titular'] . " ".  $conta['saldo'] . PHP_EOL;
}

//adicionando contas no array associativo

//informando uma chave
$contasCorrentes3[44567889012] = [
    'titular' => "Stevie",
    'saldo' => 1000000
];

foreach ($contasCorrentes3 as $cpf => $conta) {
    echo $cpf . " " . $conta['titular'] . " ".  $conta['saldo'] . PHP_EOL;
}

//tipos nas chaves

$array = [
    1 => 'a',
    '1' => 'b',
    1.5 => 'c',
    true => 'd',
];

foreach ($array as $valor) {
    echo $valor . PHP_EOL;
}

//array placa de carro

$id_automoveis = [
    'IJK-2648' => [
        'marca' => "VW",
        'modelo' => 'Gol'
    ],
    'IMF-2221' => [
        'marca' => 'Mercedez',
        'modelo' => 'M1'
    ]
];

foreach ($id_automoveis as $placa => $detalhes) {
    echo "Placa: $placa " . "Marca: " . $detalhes['marca']  . " Modelo: " . $detalhes['modelo'] . PHP_EOL;
}

//sacando um valor

$contasCorrentes3[44567889012]['saldo'] -= 0;
echo $contasCorrentes3[44567889012]['saldo'];

//subrotinas - isolando funcionalidades

function exibeMensagem($mensagem) {
    echo $mensagem . PHP_EOL;
}

$mensagem = "Pegue essa mensagem!";
exibeMensagem($mensagem);
exibeMensagem("Pegue tambem essa mensagem!");

echo PHP_EOL;

//retornando valores

function sacar(array $conta, float $valorAScar): array {
    if ($valorAScar > $conta['saldo']) {
        exibeMensagem("Você não pode sacar");
    } else {
        $conta['saldo'] -= $valorAScar;
    }
    return $conta;
}

$contasCorrentes3['44567889012'] = sacar($contasCorrentes3['44567889012'], 999999);

foreach ($contasCorrentes3 as $cpf => $conta) {
    echo "CPF: $cpf " . "Titular: " . $conta['titular'] . " Saldo: " . $conta['saldo'] . PHP_EOL;
}

$contasCorrentes3 = [
    33456491523 => [
        'titular' => 'Rafael',
        'saldo' => 1000000
    ],
    33456491524 => [
        'titular' => 'Pincha',
        'saldo' => 1000000
    ],
    33456915344 => [
        'titular' => 'Onofrio',
        'saldo' => 1000000
    ],
    44567889012 => [
        'titular' => 'Stevie',
        'saldo' => 1000000      
    ]  
];

echo PHP_EOL . "Teste:" . PHP_EOL;

foreach ($contasCorrentes3 as $cpf => $contas) {
    echo "CPF: $cpf " . "Titular: " . $contas['titular'] . " Saldo: " . $contas['saldo'] . PHP_EOL;
}

/*essa forma de alteração não funciona porque $contas é apenas uma variável
para atribuição dentro do próprio foreach. A alteração nas $contas ocorrerá
somente dentro do bloco. Para que a alteração tenha efeito nos dados
de dentro do array, é preciso que ela altere a EXPRESSÃO ITERÁVEL, ou seja,
o próprio array $contasCorrentes3 (como mostrado no bloco abaixo)
*/
foreach ($contasCorrentes3 as $contas) {
    $contas = sacar($contas, 500000);
}

//saída para mostrar como os arrays $CONTAS não foram modificados
echo PHP_EOL . "Valores nas contas permanecem os mesmos(1000000):" . PHP_EOL;

foreach ($contasCorrentes3 as $cpf => $contas) {
    echo "CPF: $cpf " . "Titular: " . $contas['titular'] . " Saldo: " . $contas['saldo'] . PHP_EOL;
}

/*já esse bloco de fato altera os valores de dentro doa array
uma vez que ele está modificando o dados da própria expressão
iterável, ou seja, do array em si*/
foreach ($contasCorrentes3 as $cpf => $contas) {
    $contasCorrentes3[$cpf] = sacar($contas, 999999);
}

echo PHP_EOL . "Valores nas contas foram alterados(1):" . PHP_EOL;

foreach ($contasCorrentes3 as $cpf => $contas) {
    echo "CPF: $cpf " . "Titular: " . $contas['titular'] . " Saldo: " . $contas['saldo'] . PHP_EOL;
}

function depositar($conta, $valorADepositar) {
    if ($valorADepositar > 0) {
        $conta['saldo'] += $valorADepositar;
    } else {
        exibeMensagem("Depositos precisam ser positivos");
    }
    return $conta;
}

//depositar para Stevie:
$contasCorrentes3[44567889012] = depositar($contasCorrentes3[44567889012], 1000000);
exibeMensagem(PHP_EOL . "Deposito de 1000000 para Stevie:");
foreach ($contasCorrentes3 as $cpf => $contas) {
    echo "CPF: $cpf " . "Titular: " . $contas['titular'] . " Saldo: " . $contas['saldo'] . PHP_EOL;
    echo "$contas[titular]" . PHP_EOL;
}

//Strings simples e strings complexas

//Para exibir um valor associativo dentro de uma string, precisamos retirar as aspas
//simples do índice

//strings simples:
echo PHP_EOL;
$test_array = ['nome', 'sobrenome', 'terceiro nome'];

echo "i want to show a number account: $test_array[0]";

foreach ($contasCorrentes3 as $contas) {
    exibeMensagem("Titular: $contas[titular]; $contas[saldo]");
}

//strings complexas:

//utilizamos chaves ao redor dos arrays, com a mesma sintaxe:

foreach ($contasCorrentes3 as $contas) {
    exibeMensagem("Titular: {$contas['titular']}; Saldo: {$contas['saldo']};");
}

//incluindo arquivos com recursos (arquivos separados)

//include('nome_do_arquivo.php'); ou
//include 'nome_do_arquivo.php';

//-------------------------------------REFERÊNCIAS-E-MAIS-LISTAS----------------------------------------

//Valor vs. referência

titularLetrasMaiusculas($contasCorrentes3[33456915344]);

foreach ($contasCorrentes3 as $contas) {
    exibeMensagem("Titular: {$contas['titular']}; Saldo: {$contas['saldo']};");
}

//mb_string
//https://www.php.net/manual/pt_BR/book.mbstring.php

//Função List

//Utilizada para atribuir valores específicos de um array para variáveis

$new_array = [12, 33, 39, 45, 90];
list($var1, $var2, $var3) = $new_array;

exibeMensagem($var1); //12
exibeMensagem($var2); //33
exibeMensagem($var3); //39

//para elementos de arrays em posições que não queremos utilizar, basta
//deixar o respectivo espaço em list() em braco:

list($var4, , , , $var5) = $new_array;

exibeMensagem($var4); //12
exibeMensagem($var5); //90

//No exemplo das contas, podemos utilizar list para atribuir os
//dados do array a variáveis e utilizar essas últimas na manipulação
//dentro das funções

foreach ($contasCorrentes3 as $contas) {
    list('titular' => $titular, 'saldo' => $saldo) = $contas;
    exibeMensagem(
        "Titular: $titular, saldo: $saldo"
    );
}

$casas = array(
    'casa1' => [
        'area' => 'area1',
        'local' => 'local1',
        'tamanho' => 1
    ],
    'casa2' => [
        'area' => 'area2',
        'local' => 'local2',
        'tamanho' => 2
    ],
    'casa3' => [
        'area' => 'area3',
        'local' => 'local3',
        'tamanho' => 3
    ]
);

foreach ($casas as $casa) {
    list('area' => $area, 'local' => $local, 'tamanho' => $tamanho) = $casa;
    exibeMensagem("Área: $area | Local: $local | Tamanho: $tamanho");
}

//uma sintaxe alternativa é:
//[$var1, $var2] = $array

foreach ($casas as $casa) {
    ['area' => $area, 'local' => $local, 'tamanho' => $tamanho] = $casa;
    exibeMensagem("Área: $area | Local: $local | Tamanho: $tamanho");
}

//remoção de itens

//para remover itens da lista, utilizamos unset($item_do_array):

unset($contasCorrentes3[33456915344]);

foreach ($contasCorrentes3 as $contas) {
    list('titular' => $titular, 'saldo' => $saldo) = $contas;
    exibeMensagem(
        "Titular: $titular, saldo: $saldo"
    );
}