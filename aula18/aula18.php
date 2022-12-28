<?php
    /*
        $arrayNome = ["Matheus", "André", "da", "Silva"];

        print_r($arrayNome);

        $nome = implode(" ", $arrayNome);
        $chrNome = str_split($nome, 1);

        print("<br>" . $nome);

        echo "<br>";

        print_r($chrNome);

    */

    /*

        #Criando um vetor baseado no intervalo de 3.
        $multiplosDe3 = range(0, 30, 3);

        print_r($multiplosDe3);

    */

    /* foreeach() - estrutura de repeticao utilizado para iterar valores de um array. */ /*

        $numeros = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

        foreach($numeros as $valor){
            echo "[Valor $valor]: $valor <br>";
        }
    
    */

    /* Índices Personalizados - utilziamos '=>' para índice um novo valor personalizado para representar índices de elementos de um vetor. */ /*

        $vetorNomes = ["A" => "Marcelo", "B" => "Maria", "C" => "Júlia"];

        print_r($vetorNomes);

        print("<br>" . $vetorNomes["B"]);

    */

    /* Índices Personalizados, Chaves Associativas - Podemos criar indices personalizados para determinar o contexto de informação atribuído ao conjunto de uma array. */ /*

        $dadosCadastro = array("Nome" => "Matheus André da Silva", "Idade" => "19", "Endereco" => "Rua A 234");

        #Criando mais um indice personalizado e atribuindo valor.
        $dadosCadastro["Sexo"] = "Masculino";

        #Exibindo com foreach valores de índices personalizados. É precio deixar explicito a relação entre chave personalizada e seu valor.

        foreach($dadosCadastro as $indice => $valor){
            echo "[Índice '$indice']: $valor<br>";
        }

    */

    /* Removendo um índice de um array - utilizando unset() */ /*

        $vetorFrutas = ["Maçã", "Laranja", "Melancia", "Limão"];

        unset($vetorFrutas[2]);

        print_r($vetorFrutas);

    */

    /* Matriz - criando matrizes em PHP: uma variável 'tabela' pode armazenar uma coleção de Arrays com linhas, e cada linha possui seu indice e valor dentro. A busca desses valores está em informar o índice de linha de uma tabela e o índice de um valor possível da linha informada. Observe: */

        $tabela = array(
            "linha1" => [1, 2, 3],
            "linha2" => [4, 5, 6],
            "linha3" => [7, 8, 9]
        );

        #Acessando o valor 5 da tabela...
        $tabela["linha1"][2] = $tabela["linha3"][1];

		print_r($tabela["linha1"]);
?>