<?php

/*----------------------------------------------TIPOS-DE-DADOS---------------------------------------------------------

1 - Quantos tipos de dados são aceitos pelo PHP, quais são, e em quais categorias estão separados?

    O PHP aceita 10 tipos de dados primitivos, separados em 3 categorias:

        Tipos esclares:
            Integer;
            Float\Double;
            Boolean;
            String;
        Tipos compostos:
            Array;
            Object;
            Callable\callbacks;
            Iterable;
        Tipos especiais:
            NULL;
            resource;

2 - How do you set the type of a variable?

    Em PHP o tipo da variável é determinado no tempo de execução, através do contexto no qual
    a variável se encontra. O programador não determina o tipo da varável, a menos que esteja
    realizando uma conversão explícita entre tipos.

3 - Show and explain 3 main ways of dealing with variable types:

    As três principais formas de lidar com tipos de dados são:

        gettype() - exibe o tipo da variável de forma legível;
        var_dump() - exibe o tipo da variável e o valor que ela carrega;
        is[type]() - retorna se a variável é ou não de determinado tipo (is_string(), is_int(), etc)

/*-------------------------------------ARRAYS--------------------------------------------

1 - Qual é o método utilizado para contar o número de elementos de um array?

    count($array);

2 - O que é um array associativo e como declará-lo?

    Array associativo é um array do tipo chave-valor onde o índice pode ser do tipo string. O
    array associativo é declarado através da utilização do operador seta (=>);

    $my_array = array('chave1' => valor1, 'chave2' => valor 2);

    ou

    $my_array = [
        'chave1' => valor1,
        'chave2' => valor2,
    ];

3 - Para que serve a função for each e como ela é declarada?

    A função foreach serve para iterar mais facilmente entre os arrays;

    Declaração:
    
        foreach ($array as $valor) {}

        ou

        foreach ($array as $chave => $valor) {}

4 - Como o foreach pode ajudar a encontrar os índices de um array associativo? Exempifique.

    O foreach pode nos ajudar a encontrar a chave através da segunte sintaxe:

        foreach ($array as $chave => $valor) {}

5 - Como adicionar um novo elemento a uma lista(array comum)?

    Para adicionar um novo elemento a um array, podemos utilizar o nome do array e o índice
    vazio.

        $array[] = valor;

6 - Como adicionar um novo elemento a um array associativo?

    Para o array associativo, podemos utilizar o nome do array e o nome da chave:

        $array['chave'] = valor;

7 - Com quais tipos os arrays em PHP são aptos a trabalhar?

    Arrays em PHP só podemos trabalhar com os tipos int e string.

8 - Como definir funcionalidades(subrotinas) no PHP?

    Para definir funcionalidades (funções ou subrotinas) no PHP, utilizamos a palavra-chave
    function:

        function my_function($parâmetros) {}

9 - É possível definir os tipos de parâmetros de funções e os tipos de retorno? Como?

    Sim, é possível definir os tipos dos parâmetros e das funções de retorno.
    Para os parâmetros, informamos os tipos antes dos nomes dos parâmetros.
    Para a função, informamos o tipo de retorno antes da abrtura de chaves e após
    dois pontos logo depois do fechamento do parênteses dos parâmetros.

        function my_function(int $valor1, string $string) : array {}

10 - Explique a diferença entre strings simples e strings complexas.

    Strings simples são aquelas nas quais envolvemos textos e variáveis em aspas duplas;
    String complexas são aquelas que mantemos a sintaxe de apresentação de variáveis e
    as envolvemos entre chaves {}.

    *Strings simples são strings utilizadas dentro de aspas duplas removendo as
    aspas dos índices dos arrays.
    Strings complexas utilizam chaves ({}) para envolver a sintaxe normal de array-índice
    ($arr[$i])

11 - Como incluímos arquivos externos no código PHP?

    Para incluir arquivos externos no PHP, podemos utilizar três palavras-chave:

        include
        require
        requeire once

12 - Quais as diferenças entre include, require e require_once?

    include - inclui o arquivo, mas não alerta erro caso o arquivo não seja encontrado;
    require - exibe erro caso o arquivo não seja encontrado;
    require once - não exibe erro caso o arquivo externo seja incluído mais de uma
    vez no código;

//-------------------------------------REFERÊNCIAS-E-MAIS-LISTAS----------------------------------------

//Valor vs. referência

1 - O que é passar por valor?

    Passar por valor significa entregar ao parâmetro uma CÓPIA da variável, de modo que as
    alterações realizadas nessa cópia não afetarão a variável original.

2 - O que é passar por referÊncia?

    Passar por referência é entregar o endereço da variável para o parâmetro, liberando acesso
    de modificação da variável.

3 - Como passamos uma variável por referência?

    Para passar uma variável por referêcia, inserimos o operador "&" antes da declaração
    do parâmetro.

4 - O que é a função list()?

    list() é uma função que permite a atribuição de muitas variáveis ao mesmo tempo, geralmente
    utilizando os valores de um array para inicializar as variáveis.

5 - Como utilizamos a função list()?

    A função list() pode ser utilizada listando dentro dos parênteses as variáveis a serem iniciali
    zadas e atribuindo à função um array.

        list(var1, var2, var3) = $array;

6 - O que é a função unset()?

    A função unset() é utilizada para remover um elemento de um array ou eliminar uma variável.