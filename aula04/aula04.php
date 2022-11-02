<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aula04</title>
</head>
<body>
    <?php
        $nome = "André";
        $idade = 19;
        $salario = 1127.54;
        $isDeMaior = $idade >= 18 ? true : false;

        print(
            "Nome: $nome<br>
            Salário: R$$salario<br>
            Idade: $idade (isDeMaior == $isDeMaior)"
        );

        print("<br><br>");

        //Typecasting no PHP: convertendo tipos de variável, de inteiro para string.

        $num = 10;
        $nome2 = (int)"10João"; //O PHP considerará apenas se um valor numérico em uma String vier com valores numéricos nos primeiros caracteres, caso não, o valor atribuído será 0.

        $num = $nome2;

        print($num);

        print("<br><br>");

        //Concatenação em PHP:

        $nome3 = "Bruno";
        $idade2 = 14;

        echo $nome3." tem ".$idade." anos de idade.";
    ?>
</body>
</html>