<?php

/*----------------------------------------------TIPOS-DE-DADOS--------------------------------------------------------

1 - Quantos tipos de dados são aceitos pelo PHP, quais são, e em quais categorias estão separados?

        O PHP possui 10 tipos de dados primitivos. Eles estão separados em 3 grupos:

            Tipos escalares:
                Integer;
                Boolean;
                Float\double;
                String;
            Tipos agregados* (compostos):
                Array;
                Object;
                Callable\callbacks;
                Iterable;
            Tipos especiais:
                NULL;
                resource;

2 - How do you set the type of a variable?

        Em PHP, a tipagem das variáveis é realizada durante o runtime, de acordo com o 
        contexto no qual essa variável está sendo utilizada. Assim, não é o programador
        quem escolhe o tipo da variável, embora possa fazer uma conversão explícita
        quando for necessário.

3 - Show and explain 3 main ways of dealing with variable types:

        Existem três formas básicas de extrair informações de tipo acerca das variáveis:

            gettype() - informa o tipo da variável de um modo fácil de ser lido por humanos;
            var_dump() - traz informações acerca do tipo da variável e seu valor;
            is_[type]() - informe se a variável é ou não do tipo solicitado, como is_string(),
            is_int(), is_boolean(), etc...


/*-------------------------------------ARRAYS--------------------------------------------

1 - Qual é o método utilizado para contar o número de elementos de um array?

        count([array]);

2 - O que é um array associativo e como declará-lo?

        Um array associativo é um array que trabalha com o formato de chave-valor para seus
        índices, de modo que o índice pode ser uma string. Utiliza-se o operador de atribuição
        => para atribuir o valor à determinada chave.

        Declaração:
        
            my_array_associativo* ($my_array_associativo) = [
                'chave1' => meu_valor1;* (,)
                'chave2' => meu_valor2;* (.)
            ];