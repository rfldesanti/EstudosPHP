<?php

/*----------------------------------------------TIPOS-DE-DADOS---------------------------------------------------------

1 - Quantos tipos de dados são aceitos pelo PHP, quais são, e em quais categorias estão separados?

    O PHP aceita 10 tipos de dados primitivos. Esses tipos estão separados em 3 categorias:

        Tipos escalares:
            Integer;
            Float\double;
            Boolean;
            String;
        Tipos agregados* (compostos):
            Object;
            Callable\Callback;
            Iterable;
            Array;
        Tipos especias:
            NULL;
            resource;

2 - How do you set the type of a variable?

    O tipo de uma variável não é determinado diretamente pelo programador. O tipo da variável é
    determinado durante a execução e depende do contexto no qual a variável é utilizada. É possível
    apenas realizar conversoes explícitas.

3 - Show and explain 3 main ways of dealing with variable types:

    gettype() - exibe uma forma legível do tipo da variável;
    var_dump() - traz informações acerca do tipo da variável e seu valor;
    is[type]() - informa se e variável é do tipo solicitado (is_int(), is_string(), etc.)

/*-------------------------------------ARRAYS--------------------------------------------

1 - Qual é o método utilizado para contar o número de elementos de um array?

    count($array);

2 - O que é um array associativo e como declará-lo?

    Um array associativo é um tipo de array que organiza seus dados na forma de chave-valor,
    onde as chaves podem ser valores inteiros ou strings [*e seus valores podem ser atribuídos]
    através do operador seta (=>)].

    Declaração:

        $my_array = array(
            'chave1' => valor1,
            'chave2' => valor2
        );

        ou

        $my_array = [
            'chave1' => valor1,
            'chave2' => valor2
        ];

3 - Para que serve a função for each e como ela é declarada?

    A função foreach é utlizada para iterar em arrays associativos de forma mais fácil.

    Declaração:

    foreach ($my_array as $valor) {
        [ações];
    }

4 - Como o foreach pode ajudar a encontrar os índices de um array associativo? Exempifique.

    A função foreach pode utilizar alguma variável temporária para armaenzar o valor dos
    índices do array.

    foreach ($my_array as $chave => $onta) {
        [ações];
    }

5 - Como adicionar um novo elemento a uma lista(array comum)?

    *mantendo vazio o índice do novo elemento;
    $array[] = 'valor1';

6 - Como adicionar um novo elemento a um array associativo?

    *adicionando através do nome do array e, na posição, o valor da chave
    $array['chave'] = valor1;

7 - Com quais tipos os arrays em PHP são aptos a trabalhar?

    Arrays associativos em PHP só podem trabalhar com o tipo string e o tipo int.

8 - Como definir funcionalidades(subrotinas) no PHP?

    É possível definir funcionalidades(subrotinas) no PHP por meio da criação de funções,
    utilizando a palavra-chave function.

9 - É possível definir os tipos de parâmetros de funções e os tipos de retorno? Como?

    Sim, é possível definir os tipos dos parâmetros e o tipo do retorno da função. Os tipos dos
    parâmetros são definidos antes dos parâmetros, enquanto que o tipo do retorno vem antes da
    abertura de chaves e depois de ":"(dois-pontos)

    Declaração:

        function my_functions(int $a, string $b): array {
            [ações];
            return array;
        }

10 - Explique a diferença entre strings simples e strings complexas.

    Strings simples são strings que não utilizam variáveis na sua composição. Strings complexas
    sõa aquelas que necessitam de {} (chaves) para exibir a variável e seu valor (no caso de um
    array).

    *Strings simples são strings utilizadas dentro de aspas duplas removendo as
    aspas dos índices dos arrays.
    Strings complexas utilizam chaves ({}) para envolver a sintaxe normal de array-índice
    ($arr[$i])

11 - Como incluímos arquivos externos no código PHP?

    Para incluir arquivos externos no PHP podemos utilizar 3 formas:

        include;
        require;
        require once;

        *include('nome_do_arquivo.php'); ou
        include 'nome_do_arquivo.php'; ou
        require 'nome_do_arquivo.php'; ou
        require_once 'nome_do_arquivo.php';

12 - Quais as diferenças entre include, require e require_once?

        include - inclui o arquivo externo, mas não gera mensagem de erro caso o arquivo
        não seja encontrado;
        require - inlcui o arquivo externo e gera mensagem de erro caso o arquivo não seja
        encontrado;
        require once - inclui o arquivo externo e não gera mensagem de erro caso o arquivo
        seja incluído novamente