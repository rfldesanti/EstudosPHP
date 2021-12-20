<?php

/*----------------------------------------------TIPOS-DE-DADOS---------------------------------------------------------

1 - Quantos tipos de dados são aceitos pelo PHP, quais são, e em quais categorias estão separados?

    O PHP possui 10 tipos de dados primitivos, separados em 3 categorias:

        Tipos escalares:
            Integer
            Boolean
            Double/float
            String
        Tipos compostos:
            arrays
            objetos
            callables/callbacks
            *iterable
        Tipos extas:
            NULL
            resources

2 - How do you set the type of a variable?

        O programador não configura o tipo da variável quando a declara. O tipo é
        decidido no runtime (tempo de execução) dependendo da *função que a variável
        está exercendo no código* (*melhor: dependendo do contexto no qual a variável é
        utilizada*). O programador pode realizar conversões explícitas quando necessário,
        porém, na maior parte dos casos, a tipagem é realizada pelo próprio PHP.

3 - Show and explain 3 main ways of dealing with variable types:

        As variáveis (seus tipos e demais informações) podem ser analiadas a partir de
        três funções diferentes:

            gettype() - exibe o tipo da variaável de uma forma legível para seres humanos
            var_dump() - traz informações sobre o tipo da variável e o valor que ela carrega
            is_[type]() - informa se a variável é do tipo solicitado is_string(), is_int(), etc...