<?php
    $i = 1;

    while ($i <= 5){
        $valorInput = "valor" . $i;
        $$valorInput = $_POST["caixa$i"]; //$$valorInput == $valor + variável de incremento [$valor1, $valor2, $valor3, $valor4, $valor5]

        $i++;
    }

    //Cada $valor gerado pela variável de variável foi possível através do conteúdo de outra variável, e num laço de repetição + definição de vezes que um bloco repete, uma variável é criada. Para a exibição de valores utilizando uma estrutura de repetição, utilizando da mesma técnica de criar variável de variável, isso também seria possível.

    echo $valor1 . "<br>";
    echo $valor2 . "<br>";
    echo $valor3 . "<br>";
    echo $valor4 . "<br>";
    echo $valor5 . "<br>";
?>

<style> * { font-family: monospace; } </style>