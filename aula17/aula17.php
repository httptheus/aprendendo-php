<?php
    /* strtolower() e strtoupper() */ /*

        $nome = "Matheus";
        printf("Meu nome é %s.<br><br>", strtolower($nome));

        printf("Meu nome é %s.", strtoupper($nome));

    */

    /**/

    /* ucfirst() - retorna a primeira letra de uma informação de cadeia de caracteres em maiúscula. */ /*

        $nome = "matheus André";
        printf("Seu nome é %s.", ucfirst($nome));

    */

    /* ucwords() - retorna uma letra de uma informação de cadeia de caracteres em maíusculas considerando o caractere informado como critério. */ /*

        $nome = "Matheus Silva";
        printf("Meu nome é %s.<br><br>", ucwords($nome, "h"));

        $palavra = "Paralelepípedo";
		echo ucwords($palavra, "e"); //Vai retornar "ParaleLePípeDo"

    */

    /* strrev() - retorna uma string ao contrário. */ /*

        $texto = "Esse texto esta ao contrario gracas ao metodo strrev()!";
        printf("%s", strrev($texto));

    */

    /* strpos() */ /*

        $palavra = "Schwarzenegger";
		
        printf("A palavra \"%s\" possui %.0f caracteres. A letra \"z\" correponde ao índice %.0f da palavra.", $palavra, strlen($palavra), strpos($palavra, "z"));

    */

    /*substr_cont() - retorna o valor de substrings existentes em uma varipavel do tipo string.*/ /*

        $frase = "Sanduiche-iche-iche de mortadela-dela-dela.";
        print($frase . "<br><br>");

        printf("A substring \"iche\" apareceu %.0f vezes na frase acima.", substr_count($frase, "iche"));

    */

    /* substr() - retorna um pedaço selecionado de uma informação string a partir do intervalo de dois números correpondentes ao índice. */ /*

        $frase = "Meu nome é Matheus André";
        $primeiroNome = substr($frase, 11, 8);

        echo $primeiroNome;

    */

    /*str_pad() - essa função é utilizada para encaixar uma string de x número de caracteres em um espaço de y caracteres, sendo este maior que a própria string em questão de comprimento. Ele recebe, além da string de texto, um valor numérico que é o espaço da string onde a string de texto vai se encaixar; uma string separadora, isto é, o caractere que vai preencher os espaços, e uma propriedade que pode ser STR_PAD_RIGHT, que vai preencher toda a string para direita. Observe:*/ /*

        $p = "Paralelogramo";
        $str = str_pad($p, 70, " ", STR_PAD_BOTH);

        echo "A regra do $str é uma regra utilizada para resolver exercícios relacionados a vetores perpendiculares e oblíquos.";

    */

    /* str_repeat() - repete uma string passada como parÂmetro x vezes.*/ /*

        $palavra = str_repeat(" muito,", 5);
        echo "Eu odeio $palavra o PHP!";

    */

    /* str_replace() - seleciona um valor string e altera um valor informado por outro valor.*/

        $preco = 2.56534;
        $preco = number_format($preco, 2);
        $preco = str_replace(".", ",", $preco);

        echo "O preço do produto é de R$ $preco";
?>