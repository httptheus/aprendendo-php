<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aula06</title>
</head>
<body>
    <?php
    /*Exibindo multiplicação de um valor.*/ /*

        $num = (int)$_GET["num"];

        for ($i = 0; $i <= 10; $i++){
            print($num . " x " . $i . " = " . ($num * $i) . "<br>");
        }

        //Mesmo o valor capturado sendo String, as operações são feitas normalmente, o que torna uso do typecast para converter o valor opcional ou dispensável.

    */

    /*Utilizando sinais de atribuição.*/ /*

        $n1 = 8;
        $mult = 0;
        $total = 0;

        while ($total < $n1 * 10){
            $total = $n1 * $mult;
            $mult += 1;

            print($n1 . " x " . $mult . " = " . $total . "<br>");
        }

    */

    /*Exercício 01: Aplicando 10% de desconto ao preço de um produto.*/ /*

        $prod = "Chocolate";
        $valorProd = 100;
        $desc = 10 / 100;
        $desc *= $valorProd;

        echo "Produto: " . $prod . "<br>";
        echo "Valor: R$" . number_format($valorProd, 2, ',', '.') . "<br><br>";

        $valorProd += $desc;

        echo "Valor com Aumento (10%): R$ " . number_format($valorProd, 2, ',', '.');

    */

    /*Exercício 02: Mostrar qual foi o ano anterior ao ano atual.*/ /*

        $ano = $_GET["anoAtual"];
        print("O ano atual é " . $ano . "<br>");
        print("O ano anterior de " . $ano . " é " . --$ano);

    */

    /*Variáveis referenciadas.*/ /*

        $a = 10;
        $b = &$a;

        echo "$a<br>$b<br><br>";

        $b += 2;

        echo "$a<br>$b";
    */

    /*Variáveis de variáveis.*/

        $a = "Matheus";
        $$a = "André"; //Criando uma variável de variável.
                       //O identificador desta variável será
                       //o conteúdo da variável $a.

        echo "$a<br>";
        echo "$Matheus<br>";
        
    ?>
</body>
</html>