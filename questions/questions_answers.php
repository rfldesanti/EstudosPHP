<?php

/*----------------------------------------------TIPOS-DE-DADOS---------------------------------------------------------

1 - Quantos tipos de dados são aceitos pelo PHP, quais são, e em quais categorias estão separados?

    O PHP suporta 10 tipos de dados:
        4 tipos escalares:
            bool;
            int;
            float;
            string;
        4 tipos compostos:
            array;
            object;
            callable;
            iterable;
        2 tipos especiais:
            NULL;
            resource;

2 - How do you set the type of a variable?

    The type of a variable is not set by the programmer, instead, it's decided at runtime by PHP depending
    on the context in which the variable is used.

3 - Show and explain 3 main ways of dealing with variable types:

    gettype() - a human-readable way of show the type of a variable;
    var_dump() - dumps information about a variable;
    is_type() - to check if the variable is of a certain type; */

    $a_int = 10;
    $a_bool = TRUE;
    $a_name = "string";

    echo "gettype() block:" . PHP_EOL;
    echo gettype($a_int) . PHP_EOL;     //integer
    echo gettype($a_bool) . PHP_EOL;    //boolean
    echo gettype($a_name) . PHP_EOL;    //string
    echo PHP_EOL;
    echo "var_dump() block:" . PHP_EOL;
    var_dump($a_int) . PHP_EOL;         //int(10)
    var_dump($a_bool) . PHP_EOL;        //bool(true)
    var_dump($a_name) . PHP_EOL;        //string(6) "string"
    echo PHP_EOL;
    echo "is_type() block:" . PHP_EOL;
    echo is_int($a_int) . PHP_EOL;      //1 (true)
    echo is_bool($a_bool) . PHP_EOL;    //1 (true)
    echo is_string($a_name) . PHP_EOL;  //1 (true)
    echo PHP_EOL;

/*-------------------------------------ARRAYS--------------------------------------------

1 - Qual é o método utilizado para contar o número de elementos de um array?

        count([array])

2 - O que é um array associativo e como declará-lo?

        Um array associativo é um array onde os índices podem ser definidos como chaves(nomes)
        do tipo string, e aos quais é possível associar um valor através do operador seta (=>).
        
        Declaração:
        
        $nome_do_array = ['chave1' => valor1, 'chave2' => valor2];

3 - Para que serve a função for each e como ela é declarada?

        foreach é uma função que, assim como o for, itera por uma lista. É melhor aproveitada
        em listas(arrays) que não possuem índice numérico sequencial(arrys associatvos).

        Declaração:

            foreach ($lista as $variávelParaIteracao) {
                ações;
            }

4 - Como o foreach pode ajudar a encontrar os índices de um array associativo? Exempifique.

        foreach pode, na declaração do array a ser iterado, definir qual será
        o nome da varíavel de índice, e atribuir a ela qual seu valor.

        Declaração:

            $minha_lista = [
                1111 => $array1,
                2222 => $aaray2,
                3333 => $array4
            ];

            foreach($minha_lista as $índice_da_lista => $valor_da_lista) {
                [ações no] $índice_da_lista;
            }

5 - Como adicionar um novo elemento a uma lista(array comum)?

        Mantendo o índice do novo elemento vazio. my_array[] = novoElemento;

6 - Como adicionar um novo elemento a um array associativo?

        É preciso informar a chave que caracteriza os elementos do array. 
            
            my_array[chave] = [
                'chave1' => valor1,
                'chave2' => valor2
            ];

7 - Com quais tipos os arrays em PHP são aptos a trabalhar?

        PHP aceita em seus arrays somente tipos núméricos inteiros ou strings.

8 - Como definir funcionalidades(subrotinas) no PHP?

        Utilizando a palavra-chave "function"

9 - É possível definir os tipos de parâmetros de funções e os tipos de retorno? Como?

        Sim, é possível. Para os parâmetros, informa-se o tipo antes do parâmetro. Para
        o retorno, informa-se após dois pontos logo após o fechamento do parênteses dos
        parâmetros

10 - Explique a diferença entre strings simples e strings complexas.

    Strings simples são strings utilizadas dentro de aspas duplas removendo as
    aspas dos índices dos arrays.
    Strings complexas utilizam chaves ({}) para envolver a sintaxe normal de array-índice
    ($arr[$i])

11 - Como incluímos arquivos externos no código PHP?

    include('nome_do_arquivo.php'); ou
    include 'nome_do_arquivo.php'; ou
    require 'nome_do_arquivo.php'; ou
    require_once 'nome_do_arquivo.php';

12 - Quais as diferenças entre include, require e require_once?

    include gera apenas um aviso quando o arquivo não é encontrado;
    require gerar um erro quando o arquivo não é encontrado;
    requeire_once evita que ocorra um erro no programa caso o arquivo
    seja chamado mais de uma vez;