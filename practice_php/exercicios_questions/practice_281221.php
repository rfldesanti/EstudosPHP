<?php

/*----------------------------------------------TIPOS-DE-DADOS---------------------------------------------------------

1 - Quantos tipos de dados são aceitos pelo PHP, quais são, e em quais categorias estão separados?

    O PHP aceita 10 tipos primitivos de dados, separados em 3 categorias:

        Tipos escalares:
            Boolean;
            Integer;
            Float\double;
            String;
        Tipos compostos:
            Array;
            Object;
            Callbacks\Callable;
            Iterable;
        Tipos especiais:
            NULL;
            resource;

2 - How do you set the type of a variable?

    Em PHP o tipo das variáveis não é determinado pelo programador, mas sim pelo próprio PHP
    durante o tempo de execução, dependendo do contexto no qual a variável será utilizada. Somente
    nos casos de conversão explícita é que o tipo da variável será escolhido pelo programador.

3 - Show and explain 3 main ways of dealing with variable types:

    As funções básicas para lidar com as variáveis - seus tipos e valores - em PHP são:

        gettype() - informa o tipo da variável de forma legível;
        var_dump() - informa o tipo e o valor da variável;
        is_[type] - informa se a variável é ou não de determinado tipo (is_string(), is_int(), etc.);

/*-------------------------------------ARRAYS--------------------------------------------

1 - Qual é o método utilizado para contar o número de elementos de um array?

    count(array);

2 - O que é um array associativo e como declará-lo?

    Um array associativo é um array do tipo chave-valor(ou mapa) onde os índices(chaves) podem
    ser do tipo string, e a atribuição a um valor é feita através do operador seta "=>";

3 - Para que serve a função for each e como ela é declarada?

    A função foreach serve para iterar facilmente por um array associativo.

    Declaração:
    
        foreach($array as $valor) {}

        ou

        foreach($array as $chave as $valor) {}

4 - Como o foreach pode ajudar a encontrar os índices de um array associativo? Exempifique.

    Os índices de um array associativos podem ser utilizados com foreach através da seguinte
    declaração:

        foreach($array as $chave as $valor) {}

5 - Como adicionar um novo elemento a uma lista(array comum)?

    Para adicionar um novo elemento a um array comum, basta utilizar o nome do array
    com colchetes vazios e atriubir o novo elemento.

    Declaração:

        $array[] = valor;

6 - Como adicionar um novo elemento a um array associativo?

    Para adicionar um elemento a um array associativo basta utilizar o nome do array
    e seu novo índice entre colchetes, atribuindo o novo valor.

    Declaração:

        $array['nova_chave'] = novo_valor;

7 - Com quais tipos os índices dos arrays associativos em PHP são aptos a trabalhar?

    Arrays associativos em PHP podem ter índices somente do tipo integer ou string.

8 - Como definir funcionalidades(subrotinas) no PHP?

    Para definir funcionalidades ou subrotinas em PHp utilizamos a palavra-chave function.

    Declaração:

        function my_function([parâmetros]): tipo_de_retorno
        {
            [comandos];
        }

9 - É possível definir os tipos de parâmetros de funções e os tipos de retorno? Como?

    Sim, é possível. Para parâmetros, antes da declaração dos mesmos, e para a função,
    após os ":"(dois-pontos) e antes das chaves de abertura.

    Declaração:

        function my_function([tipo_dos_parâmetros $parâmetros]): tipo_de_retorno
        {
            [comandos];
        }

10 - Explique a diferença entre strings simples e strings complexas.

    Strings simples utilizam aspas duplas e exigem que uma declaração de elemento de array
    remova as aspas simples que estão nos índices.
    Já strings complexas, embora utilizem também aspas duplas, não alteram a declaração
    de elemento de array, pois colocam a declaração entre chaves ({});

11 - Como incluímos arquivos externos no código PHP?

    Para incluir arquivos externos no PHP podemos utilizar três comandos:

        include;
        require;
        require_once;

12 - Quais as diferenças entre include, require e require_once?

    include - inclui o arquivo externo e não acusa erro caso o arquivo não seja
    encontrado;
    require - inclui o arquivo e acusa erro caso o arquivo não seja encontrado;
    require_once - incluir o arquivo e não acusa erro caso o arquivo seja incluído
    novamente;

//-------------------------------------REFERÊNCIAS-E-MAIS-LISTAS----------------------------------------

//Valor vs. referência

1 - O que é passar por valor?

    Passar por valor significa realizar uma cópia de variável para um parâmetro, de modo que as
    alterações no parâmetro se limitam apenas ao parãmetro, e não à variável da qual foi copiada.

2 - O que é passar por referência?

    Passar por referência significa enviar para um parâmetro o endereço de uma variável, de modo
    que as alterações no parâmetro refletem na variável cujo endereço foi enviado para o parâmetro.

3 - Como passamos uma variável por referência?

    Para passar uma variável por referência em um parâmetro utilizamos o operador "&" antes
    do parâmetro na declaração da função.

4 - O que é a função list()?

    list() é uma função que, em uma só operação, é capaz de atribuir valores a muitas variáveis.
    Geralmente list() é utilizado para coletar valores que estão em arrays.

5 - Como utilizamos a função list()?

    Declaração:

        list($var1, $var2, $var3) = $array;

6 - O que é a função unset()?

    unset() é uma função utilizada para eliminar elementos de um array ou destruir uma variável.