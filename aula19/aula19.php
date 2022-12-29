<?php
    /* foreach() - exibindo valor de um vetor. */ /*

        $vetorNomes = [4, 12, 6, 14, 43, 62];
        $valIndice = 0;
        
        foreach ($vetorNomes as $valor){
            echo "Índice $valIndice - $valor <br>";
            $valIndice++;
        }

    */

    /* foreach() -  exibindo valor de um vetor de índices personalizados. */ /*

        $vetorCad = array(
            "Nome" => "Matheus André da Silva",
            "Idade" => 19,
            "Endereco" => "Rua A, 334",
        );

        $vetorCad["Sexo"] = "Masculino";

        foreach ($vetorCad as $indice => $info){
            echo "[$indice]: $info <br>";
        }

        echo "<br><br>";

    */

    /* count() - retorna o comrprimento de um array. */ /*

        $vetorComidas = array("Pizza", "Sorvete", "Lasanha",    "Chocolate", "Hamburguer");

        $vetorComidas[] = "Cachorro-quente"; #Adicionando mais 1 elemento na Array.

        echo count($vetorComidas); //retorna 6.

    */

    /*array_push() e array_pop() - adicionando e removendo as últimas instâncias de valor de um array.*/ /*

        $vetorNomes = array("Matheus");

        array_push($vetorNomes, "Júlia", "João", "Marcela", "Maria", "Rafael");

        array_pop($vetorNomes); //remove a última instância de valor ou o valor especificado.

        unset($vetorNomes[3]); //especificando um valor dentro do Array para ser removido.

        print_r($vetorNomes);

    */

    /*array_unshift() - alocando um valor no primeiro índice de um Array. Isso significa que o valor da primeira posição passará a valer um. É um array_push() invertido. E utilizando array_shift() para remover o primeiro valor de um array.*/ /*

        $vetorNomes[] = "Matheus";
        $vetorNomes[] = "João";
        $vetorNomes[] = "Fernanda";
        $vetorNomes[] = "Letícia";

        array_shift($vetorNomes);

        array_unshift($vetorNomes, "Jubiscleiton");

        print_r($vetorNomes);

    */

    /*sort() - organizando elementos numéricos em ordem crescente através do método sort() */ /*

        $vetorNumeros = [8, 2, 9, 3, 7, 1, 4, 6, 5];
        sort($vetorNumeros);

        $numeros = implode(" ", $vetorNumeros);

        echo "$numeros";

    */

    /* array_reverse() - reverte posições de Array: os últimos índices tornam os primeiros e os primeiros os últimos */ /*

        $vetorNum = [1, 2, 3, 4, 5, 6, 7, 8, 9];
        rsort($vetorNum);

        print_r($vetorNum);

    */

    /*asort() - elementos permanecerão com seus números de índice e reorganizados em ordem crescente, ainda mantendo seus números de índices originais. (ordenação associativa)*/ /*

        $vetorNum = [5, 9, 8, 2, 7, 3, 1, 2, 6, 0];
        asort($vetorNum);

        print_r($vetorNum);

    */

    /* ksort() - apenas os índices, ou chaves, serão reorganizados, em ordem crescente. */

        $vetorNum = [3, 8, 2, 9, 4, 6, 5, 7, 1];
        asort($vetorNum);

        ksort($vetorNum);
    
        print_r($vetorNum);
?>