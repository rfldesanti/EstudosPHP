<?php

/*----------------------------------------------TIPOS-DE-DADOS---------------------------------------------------------

1 - Quantos tipos de dados são aceitos pelo PHP, quais são, e em quais categorias estão separados?

    O PHP aceita 10 tipos de dados primitivos. Esses tipos estão divididos em três grupos:

        Tipos escalares:
            Integer;
            Float\double;
            Boolean;
            String;
        Tipos compostos:
            Array;
            Object;
            Callable\callback;
            Iterable;
        Tipos especiais:
            NULL;
            resource;

2 - How do you set the type of a variable?

    O programador não define o tipo da variável durante a programação. O tipo é definido no tempo
    de execução, dependendo do contexto no qual a variável se encontra. A única definição de tipo
    ocorre quando é realizada uma conversão explícita.

3 - Show and explain 3 main ways of dealing with variable types:

    As três principais formas de lidar com os tipos de variáveis são:

        gettype() - informa de um modo fácil o tipo da variável;
        var_dump() - informa o tipo da variável e o valor da mesma;
        is_[type] - informa se a variável é do tipo solicitado (is_[int(), is_[string](), etc.])

/*-------------------------------------ARRAYS--------------------------------------------

1 - Qual é o método utilizado para contar o número de elementos de um array?

    count([array]);

2 - O que é um array associativo e como declará-lo?

    Array associativo é um array do tipo chave-valor que pode receber uma string como
    índice através do operador seta "=>";

    Declaração:
        $my_array = [
            'chave1' => valor1,
            'chave2' => valor2
        ];

3 - Para que serve a função for each e como ela é declarada?

    A função foreach serve para facilitar a iteração sobre um array, principalmente os
    arrays associativos.

    Declaração:

        foreach ($my_array as $chave => $valor) {}

        ou

        foreach ($my_array as $valor) {}

4 - Como o foreach pode ajudar a encontrar os índices de um array associativo? Exempifique.

    foreach ajuda a trabalhar com os índices de um array associativo ao utilizá-lo
    na declaração da função.

    Declaração:

        foreach ($my_array as $chave => $valor) {}

5 - Como adicionar um novo elemento a uma lista(array comum)?

    Para adicionar novos elementos a um array comum, podemos declarar o array com uma chave
    vazia e atribuí-lo ao novo valor desejado.

    $array[] = novo_valor;

6 - Como adicionar um novo elemento a um array associativo?

    Para o array associatvio, adicionamos novos elementos através da nomeação de uma nova
    chave naquele array e atribuição dessa declaração ao novo valor.

    $array['nova_chave'] = novo_elemento;

7 - Com quais tipos os índices dos arrays associativos em PHP são aptos a trabalhar?

    Arrays associativos só podem receber índices do tipo string ou inteiro.

8 - Como definir funcionalidades(subrotinas) no PHP?

    Para definir funcionalidades no PHP utilizamos a palavra-chave function.

    Declaração:

        function minha_função(tipo-do-parametro $parâmetro): tipo-do-retorno {}

9 - É possível definir os tipos de parâmetros de funções e os tipos de retorno? Como?

    Sim, é possível. Declaramos os tipos dentro dos parênteses e antes das variáveis
    e após os dois-pontos e antes da abertura das chaves para o tipo de retorno.

10 - Explique a diferença entre strings simples e strings complexas.

    Strings simples são aquelas que estão entre aspas duplas e precisam que a declaração
    de elementos de array(variáveis) sejam alterados, removendo as aspas simples da palavra.

    Strings complexas também estão sobre aspas duplas, mas utilizam chaves para englobar as
    declarações de variáveis pois a sintaxe da declaração não é alterada.

11 - Como incluímos arquivos externos no código PHP?

    Existem três formas de incluir arquivos externos no PHP:

        include
        require
        require once

12 - Quais as diferenças entre include, require e require_once?

    include - inclui os arquivos, mas não exibe mensagem de erro caso o arquivo não seja
    encontrado.
    require - inclui os arquivos e exibe mensagem de erro caso o arquivo não seja encontrado.
    require once - inclui os arquivos, exibe mensagem de erro caso não seja encontrado e 
    não gera erro caso o arquivo seja inserido mais de uma vez.

//-------------------------------------REFERÊNCIAS-E-MAIS-LISTAS----------------------------------------

//Valor vs. referência

1 - O que é passar por valor?

    Passar por valor significa fazer uma cópia do valor da variável e alterar somnete essa cópia.

2 - O que é passar por referÊncia?

    Passar por referencia siginfica passar a referência da variável para alguma função, o que
    ocasionará a alteração tanto da variável na função quanto na variável fora da função.

3 - Como passamos uma variável por referência?

    Utilizamos o operador "&" na declaração do parâmetro da função.

4 - O que é a função list()?

    list() é uma função que facilita a declaração de muitas variáveis ao mesmo tempo, geralmente
    atribuindo o valor às variáveis através de um array.

    *A função list() é utilizada para criar variáveis em apenas uma operação, geralmente utilizando
    as posições de um array para atriubir os valores às variáveis.

5 - Como utilizamos a função list()?

    list() pode ser utilizada da seguinte:

    Declaração:

        list($var1, $var2, $var3) = $array; //assim as variáveis terão como valor os valores
                                            //que estão nas posições do array

6 - O que é a função unset()?

    unset() é uma função utilizada para destruir uma variável.

    *A função unset() é utilizada para remover um item de um array ou destruir uma variável.