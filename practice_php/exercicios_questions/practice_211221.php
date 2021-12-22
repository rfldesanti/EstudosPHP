<?php

/*----------------------------------------------TIPOS-DE-DADOS---------------------------------------------------------

1 - Quantos tipos de dados são aceitos pelo PHP, quais são, e em quais categorias estão separados?

    São 10 os tipos de dados primitivos em PHP, separados em 3 categorias:
        Tipos escalares:
            Integer;
            Float\double;
            Boolean;
            String;
        Tipos agregados* (compostos):
            Array;
            Object;
            Callable\callback;
            Iterable;
        Tipos especiais:
            NULL;
            resource;

2 - How do you set the type of a variable?

    O tipo das variáveis não é escolhido pelo programador. O tipo será definido durante o runtime,
    dependendo do contexto em que a variável será utilizada. É possível fazer conversões explícitas
    apenas.

3 - Show and explain 3 main ways of dealing with variable types:

    gettype() - informa o tipo da variável de uma forma fácil de ser lida;
    var_dump() - exibe informações do tipo e valor da variável;
    is_[type]() - exibe se a variável é ou não de determinado tipo (is_string(), is_int(), etc.

/*-------------------------------------ARRAYS--------------------------------------------

1 - Qual é o método utilizado para contar o número de elementos de um array?

    count()*
    (count($[array]))

2 - O que é um array associativo e como declará-lo?

    Um array associativo é um tipo de dado array que organiza seus dados(elementos) em um modelo
    de chave-valor, no qual a chave pode ser um tipo string ou int. *sua declaração é feita
    através do operador =>.

    Declaração:

        $my_array = [
            'chave1' => 'valor1',
            'chave2' => 'valor2
        ]

3 - Para que serve a função for each e como ela é declarada?

    A função for each proporciona um modo facilitado de percorrer um array.
    Ela pode ser declarada de duas formas:

        foreach ($[array] as $variavel_temporaria)
        foreach ($[array] as $chave => $variavel_temporaria) - método usado para se utilzar 
        do valor da chave.

4 - Como o foreach pode ajudar a encontrar os índices de um array associativo? Exempifique.

    É possível utilizar a segunda forma de declaração do foreach para encontrar
    os indices de um array associativo

    Exemplo: foreach($[my_array] as $chave => $valor_temporario) {
        echo $chave;
    }

5 - Como adicionar um novo elemento a uma lista(array comum)?

    Declarando o array com um índice vazio e atribuindo o valor desejado:

        $my_array = [15, 18, 21];
        $my_array[] = 33;
        $my_array = [15, 18, 33];

6 - Como adicionar um novo elemento a um array associativo?

    Utilizando um nome de chave e informando os valores:

        $my_ass_array[valor_da_chave] = [
            'valor1' => 'a',
            'valor2' => 'b'
        ]

7 - Com quais tipos os arrays em PHP são aptos a trabalhar?

    Int e String;

8 - Como definir funcionalidades(subrotinas) no PHP?

    Através da palavra-chave "function".

9 - É possível definir os tipos de parâmetros de funções e os tipos de retorno? Como?

            Sim. Os tipos dos parâmetros informa-se o tipo antes dos parâmetros:

                function (array $array, String string)
            
            Já os tipos de retorno são informados após o fechamento dos parêntenes e 
            antes da abertura de chaves, precedido por ":":

                function (array $my_array, String string): array