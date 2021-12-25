<?php

/*----------------------------------------------TIPOS-DE-DADOS---------------------------------------------------------

1 - Quantos tipos de dados são aceitos pelo PHP, quais são, e em quais categorias estão separados?

    O PHP aceita 10 tipos de dados primitivos. Esses tipos estão divididos em 3 categorias:

        Tipos escalares:
            Integer;
            Float\double;
            String;
            Boolean;
        Tipos compostos:
            Array;
            Callback\callable;
            Iterable;
            Object;
        Tipos especiais:
            resource;
            NULL;

2 - How do you set the type of a variable?

    O tipo das variáveis não é escolhido pelo programador. O tipo é definido no tempo de execução,
    dependendo do contexto no qual a variável se encontra. O tipo é definido pelo programador
    somente no caso de conversões explícitas.

3 - Show and explain 3 main ways of dealing with variable types:

    As três principais formas de verificar os tipos e valores de variáveis são:

        gettype() - uma forma legível de verificar o tipo da variável;
        var_dump() - informa o tipo e o valor da variável;
        is_[type]() - informa se a variável é ou não do tipo solicitado (is_int(), is_string(), etc.);

/*-------------------------------------ARRAYS--------------------------------------------

1 - Qual é o método utilizado para contar o número de elementos de um array?

    count(array);

2 - O que é um array associativo e como declará-lo?

    Array associativo é um tipo de array de modelo chave-valor, onde os índices do array podem
    ser do tipo string e os valores são associados atra´ves do operador "=>" (seta);

    Declaração:
    
        $array = [
            'chave1' => valor1,
            'chave2' => valor2,
            'chave3' => valor3
        ];

3 - Para que serve a função for each e como ela é declarada?

    A função foreach permite que um array seja iterado de uma forma fácil.

    Declaração:

        foreach ($array as $valor) {}

        ou

        foreach ($array as $cpf=> $valor) {}

4 - Como o foreach pode ajudar a encontrar os índices de um array associativo? Exempifique.

    É possível encontrar os índices através da seguinte sintaxe:

        foreach ($array as $cpf=> $valor) {}

5 - Como adicionar um novo elemento a uma lista(array comum)?

    Para adicionar um novo elemento a um array vazio, podemos utilizar a seguinte sintaxe:

    $array[] = novoValor; //nome_do_array com índice vazio e atribuição ao novo valor;

6 - Como adicionar um novo elemento a um array associativo?

    Para arrays associativos, utilizamos a mesma sintaxe, porém informando um nome para
    o índice.

    $array_associativo['novaChave'] = valor;

7 - Com quais tipos os índices dos arrays associativos em PHP são aptos a trabalhar?

    Em PHP, arrays associativos só podem receber índices do tipo string ou int.

8 - Como definir funcionalidades(subrotinas) no PHP?

    Para definir funcionalidades ou subrotinas no PHP, utilizamos a palavra-chave function

    Declaração:

        function minha_funcao(tipo parâmetro): tipo de retorno {}

9 - É possível definir os tipos de parâmetros de funções e os tipos de retorno? Como?

    Sim, o PHP aceita a definição de tipos em parâmetros e em retornos;

10 - Explique a diferença entre strings simples e strings complexas.

    Strings simples são aquelas que estão entre aspas duplas e é necessário alterar a sintaxe
    dos índices de array, removendo as aspas de dentro dos colchetes.
    Já as strings complexas, também entre aspas duplas, utilizam as chaves {} para manter a 
    sintaxe de vaores de arrays.

11 - Como incluímos arquivos externos no código PHP?

    Para incluir arquivos externos no PHP, podemos utilizar os seguintes comandos:

        include;
        require;
        require_once;

12 - Quais as diferenças entre include, require e require_once?

    include - inclui o arquivo externo e não gera erro caso o arquivo não seja encontrado;
    require - inclui o arquivo e acusa erro caso não seja encontrado;
    require_once - inclui o arquivo e não acusa erro caso seja incluído novamente;

//-------------------------------------REFERÊNCIAS-E-MAIS-LISTAS----------------------------------------

//Valor vs. referência

1 - O que é passar por valor?

    Passar por valor significa, basicamente, fazer uma cópia do valor de uma variável para
    outra variável, fazendo com que alterações nessa última não causem alterações na primeira.

2 - O que é passar por referência?

    Passar por referência significa informar o endereço de uma variável, de modo que a alteração
    na variável sendo manipulada irá alterar a variável que está no endereço que foi informado.

3 - Como passamos uma variável por referência?

    No caso de parâmetros de funções, utilizamos o operador "&" para passar o valor por referência.

4 - O que é a função list()?

    list() é uma função que proporciona a inicialização de muitas variáveis em apenas uma operação,
    geralmente sendo utilizada com elementos de um array.

5 - Como utilizamos a função list()?

    Declaração:

        list(var1, var2, var3) = $array //assim as variáveis dentro de list irão assumir os
                                        //valores que estão dentro do array

6 - O que é a função unset()?

        unset() é uma operação utilizada para remover um item do array ou destruir uma
        variável;