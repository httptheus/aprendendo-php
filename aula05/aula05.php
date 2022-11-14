<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aula05</title>
</head>
<body>
    <?php
        //Ordem de precedência dos operadores aritméticos.
        /*

            $n1 = 10; $n2 = 2; $n3 = 3;
            $total = $n1 + $n2 * $n3;

            echo $total;
        */

        //Capturando valores na URL.
        //Mensagens de erro serão mostradas na tela se nenhuma das variáveis passadas dentro do método $_GET[] existirem na URL.
        /*

            $nome = $_GET["varNome"];
            $idade =  $_GET["varIdade"];

            print("Meu nome é $nome e eu tenho  $idade anos de idade.")
        */

        //Métodos nativos do PHP para realização de cálculos.

        $num1 = abs(-5); //Retorna o valor absoluto de um número.

        $num2 = sqrt(16); //Retorna a raíz quadrada de um número.

        $num3 = pow(4, 5); //Retorna a potenciação de um número elevado a outro.

        $num4 = 3.4; //arredondando um valor decimal com round(), ceil() e floor().

        $num5 = intval(53.54323); //Retorna apenas a parte inteira de um valor decimal.

        $num6 = number_format(1123.432276, 2, "a", ">:)"); //Retorna um valor formatado (número de casas depois da vírgula, ponto flutuante e ponto de milhar).

        print($num1 . "<br>");
        print($num2 . "<br>");
        print($num3 . "<br>");

        print(round($num4) . ", " . ceil($num4) . ", " . floor($num4) . "<br>");

        print($num5 . "<br>");

        print($num6 . "<br>");
    ?>
</body>
</html>