<?php
        /*Apesar de tipos primitivos serem presentes na linguagem, o PHP não diferencia números de string ao mesmo tempo em que diferencia. Por conta disso, é possível realizar contas com informações que seriam do tipo string sem nenhum problema.*/ /*

		    $v1 = "320";
            $v2 = 72;

		    echo "O resultado é " . ($v1 + $v2);

            echo "<br>" . gettype($v1);
            echo "<br>" . gettype($v2);

        */

        /* ***
            [FUNÇÕES STRING EM PHP]
        *** */

        /* printf() - funçao que escreve uma informação string na tela + possibilidade de formatação de dados em um único comando! */ /*

            $prod = "Chocolate";
            $preco = 4.2;

            printf("O produto '%s' custa R$ %.2f.", $prod, $preco);
        
        /* print_r() - exibe detalhes de uma variável, principalmente se esta armazena um vetor com conjunto de informações. */ /*

            $arrayValores = array(1, 2, "Matheus", 4, true);
            print_r($arrayValores);

        */

        /* wordwrap() - quebra linhas de texto automaticamente. */ /*

            $texto = "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Alias accusantium doloribus ea dignissimos vel? Asperiores nihil voluptatum fugit molestiae ducimus repellat qui beatae inventore alias debitis. Perspiciatis dolore inventore temporibus! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Alias accusantium doloribus ea dignissimos vel? Asperiores nihil voluptatum fugit molestiae ducimus repellat qui beatae inventore alias debitis. Perspiciatis dolore inventore temporibus! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Alias accusantium doloribus ea dignissimos vel? Asperiores nihil voluptatum fugit molestiae ducimus repellat qui beatae inventore alias debitis. Perspiciatis dolore inventore temporibus!";

            echo wordwrap($texto, 8, "\n<br>", true);

        */

        /* strlen() - conta número de caracteres de uma string. */ /*

            $palavra = "Paralelepípedo";
            $numLetras = strlen($palavra);

            printf("A palavra \"%s\" possui %.0f letras ao todo.", $palavra, $numLetras - 1);

        */

        /* strtoupper() e strtolower() - retorna respectivamente um texto em maiúsculas e minúsculas. */ /*

            $texto = "Meu nome é Matheus e tenho 19 anos.";

            printf("%s<br>", strtoupper($texto));

            printf("%s", strtolower($texto));

        */

        /* trim() - remove espaços desnecessários do começo e fim de uma string. */ /*

            $txt = isset($_GET["nome"]) ? $_GET["nome"] : "???";
		    printf("%s<br>", $txt); //texto sem o método trim().

		    $txt = trim($txt); //Atribuindo trim() ao texto.
		    printf("%s", $txt);

            #O PHP automaticamente remove esses espaços desnecessários.

        */

        /* str_word_count() - conta palavras presentes em uma string. */ /*

            $frase = "Eu vou estudar PHP";
		    printf("%s<br>", str_word_count($frase)); //retorna 4.

            // O método pode também receber um valor de parâmetro de 0 a 2 como valor além do próprio texto, isso retorna coisas específicas dependendo do tipo de variável. Por exemplo, pode transformar cada palavra um item de um Array ao passar 1 ou 2 como valor de parâmetro.

            $frase = str_word_count($frase, 2);
            print_r($frase);

        */

        /*explode() - separa cada palavra de uma string de cadeia de caracteres e é usado para atribuí-lo a um vetor. O primeiro valor de parâmetro precisa ser ums eparador, ou seja, um valor string com espaço. Parecido com o método str_word_count() quando se é passado mais valores de parâmetro.*/ /*

            $mensagem = "Matheus André da Silva";

            $vetorMensagem = explode(" ", $mensagem);

            print_r($vetorMensagem);

        */

        /*str_split() - divide todos os caracteres de uma informação string em um vetor.*/ /*

		    $palavraLegal = "Ornitorrinco";
		    $vetorPalavraLegal = str_split($palavraLegal, strlen($palavraLegal) / 6);

		    print_r($vetorPalavraLegal);

        */

        /*implode() e join() - junta todos os valores de índices de um vetor e o concatena em uma variável só. Também recebe um valor separador para separar cada elemento e impedir que os valores estejam um colado ao outro. O inverso do método explode(); */ /*

            $vetorFrase = array("Essa", "é", "uma", "frase", "legal");
		    $fraseLegal = implode(" ", $vetorFrase);

		    printf("%s", $fraseLegal);

        */

        /* chr() - retorna o exato caractere a partir de um valor de índice passado como parâmetro. Semelhante ao método fromCodePoint do JavaScript. */ /*

            $caractere = chr(37); //retorna '%'
		    printf("%s", $caractere);

        */

        /* ord() - retorna a posição de índice dentro da tabela ASCII de um valor string informado. O oposto do método chr(). */

        $caractere = "@";
		printf("O caractere \"%s\" está localizado na posição %s dentro da tabela ASCII.", $caractere, ord($caractere));   
?>