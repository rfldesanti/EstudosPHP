<?php

/*----------------------------------------------TIPOS-DE-DADOS---------------------------------------------------------

1 - Quantos tipos de dados são aceitos pelo PHP, quais são, e em quais categorias estão separados?

    O PHP aceita 10 tipos de dados primitivos, divididos em 3 categorias:

        Tipos escalares:
            Boolean;
            Integer;
            Float;
            String;
        Tipos compostos:
            Array;
            Objcet;
            Iterable;
            Callback\Callable;
        Tipos especiais:
            NULL;
            resource;

2 - How do you set the type of a variable?

    O tipo das variáveis não é escohido pelo programador, mas sim pelo próprio PHP, durante o 
    tempo de execução. O tipo da variável vai depender do contexto no qual a variável está inse-
    -rida.

3 - Show and explain 3 main ways of dealing with variable types:

    Três formas principais de lidar com as variáveis, verificando seus tipos e valores, são:

        gettype() - informa de um modo simples e legível o tipo da variável;
        var_dump() - informa o tipo da variável e seu valor;
        is[type] - informa se a variável pertence ao tipo solicitando (is_string(), is_int(), etc.)

/*-------------------------------------ARRAYS--------------------------------------------

1 - Qual é o método utilizado para contar o número de elementos de um array?

    count(array);

2 - O que é um array associativo e como declará-lo?

    Um array associativo é um array que possui o modelo chave-valor, onde as chaves podem ser
    do tipo string e sua atribuição aos valores é feita através do operador de seta "=>".

    Declaração:

        $array = [
            'chave1' => valor1,
            'chave2' => valor2,
        ]

3 - Para que serve a função for each e como ela é declarada?

    For each é uma função que torna a iteração por um array associativo uma tarefa mais fácil
    de ser realizada.

    Declaração:

            foreach($array as $valor) {
                [comandos]
            }

            ou

            foreach ($array as $chave => $valor) {
                [comandos]
            }

4 - Como o foreach pode ajudar a encontrar os índices de um array associativo? Exempifique.

    Um array associativo utilizando strings nas chaves pode ser utilizado em um foreach
    através da seguinte declaração:

        Declaração:

            foreach ($array as $chave => $valor) {
                [comandos]
            }

5 - Como adicionar um novo elemento a uma lista(array comum)?

    Para adicionar um elemento em um array comum basta utilizar o nome do array e os
    colchete vazios.

    Declaração:

        $array[] = novo_valor;

6 - Como adicionar um novo elemento a um array associativo?

    Para adicionar um novo elemento a um array associativo devemos utilizar o nome do array
    e o modelo de chave dentro dos colchetes.

    Declaração:

            $array['chave'] = novo_valor;

7 - Com quais tipos os índices dos arrays associativos em PHP são aptos a trabalhar?

    Arrays associativos podem utilizar strings ou inteiros como chaves.

8 - Como definir funcionalidades(subrotinas) no PHP?

    Para definir funcionalidades ou subrotinas no PHP, utiliza-se a palavra-chave 'function'.

    Declaração:

            function my_function([tipo do parâmetro] [parâmetro]): [tipo de retorno] (opcional) {
                [comandos]
            }

9 - É possível definir os tipos de parâmetros de funções e os tipos de retorno? Como?

    Sim, é possivel. Utiliza-se a seguinte sintaxe:

        Declaração:

            function my_function([tipo do parâmetro] [parâmetro]): [tipo de retorno] (opcional) {
                [comandos]
            }

10 - Explique a diferença entre strings simples e strings complexas.

    Strings simples utilizam aspas duplas e modificam a sintaxe de declaração de elementos de
    array removendo as aspas das chaves que estão nos colchetes.
    Strings complexas também utilizam aspas duplas, porém utilizam chaves para manter a sintaxe
    dos elementos de arrays associativos.

11 - Como incluímos arquivos externos no código PHP?

    Para incluir arquivos externos no PHP utilizamos três funções:

            include
            require
            require_once

12 - Quais as diferenças entre include, require e require_once?

    include - inclui os arquivos externos e não acusa erro caso os arquivos não sejam
    encontrados;
    require - inclui os arquivos externos e acusa erro caso os arquivos não sejam encontrados;
    require_once - incluir os arquivos e não acusa erro caso os arquivos sejam incluídos mais
    de uma vez no código;

//-------------------------------------REFERÊNCIAS-E-MAIS-LISTAS----------------------------------------

//Valor vs. referência

1 - O que é passar por valor?
    
    Passar por valor significa enviar uma cópia da variável para alguma função, de modo que as
    alterações realizadas na cópia afetarão somente a cópia, e não a variável original.

2 - O que é passar por referÊncia?

    Passar por referência significa enviar o endereço que aponta para a variável para alguma função,
    ocasionando alterações na própria variável cujo endereço foi enviado.

3 - Como passamos uma variável por referência?

    Para passar uma variável por referência, utilizamos o operador "&" em frente ao parãmetro.

4 - O que é a função list()?

    A função list() é utilizada para atribuir valores a muitas variáveis em uma só operação,
    geralmente utilizada para copiar valores que estão em arrays.

5 - Como utilizamos a função list()?

    list() geralmente é utilizada da seguinte forma:

        Declaração:

            list($var1, $var2, $var3, , $var4) = $array;

6 - O que é a função unset()?

    unset() é uma função utilizada tanto para destruir uma variável ou eliminar a referência
    a um objeto quanto para retirar um item de um array.