<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aula07</title>
</head>
<body>
    <?php
    /*Operadores Relacionais: são utilizado para realizar testes lógicos e definir a direção de execução de um programa.*/ /*

        $maioridade = 18;
        $idade = $_GET["idade"];
        $temResponsavel = $_GET["autorResp"];
        $result;

        if ($idade >= $maioridade){
            $result = "Você é maior de idade. Pode entrar na festa.";

        } else if ($idade < $maioridade and $temResponsavel == "sim"){
            $result = "Você é menor de idade e está acompanhado de um responsável. Pode entrar na festa.";

        } else {
            $result = "Você é menor de idade e não possui um responsável. Não pode entrar na festa.";
        }

        print($result);

    */
    
    /*Descobrindo se um número é par ou ímpar.*/ /*

        $num = $_GET["num"];
        $parOuImpar = $num % 2 == 0 ? "$num é um número par." : "$num é um número impar.";

        print($parOuImpar);

    */

    /*Exercício 01: permitir que o usuario escolha entre somar e multiplicar dois números.*/ /*

        $num1 = $_GET["n1"];
        $num2 = $_GET["n2"];
        $op = $_GET["op"];

        $result = $op == "soma" ? "O resultado da soma entre " . $num1 . " e " . $num2 . " é de " . ($num1 + $num2) : "O resultado da multiplicação entre " . $num1 . " e " . $num2 . " é de " . ($num1 * $num2);

        print($result);

    */ 

    /*Exercício 02: Mostrar a situação de um aluno, de acordo com a sua média obtida.*/ /*
        
        $nota1 = $_GET["n1"];
        $nota2 = $_GET["n2"];
        $nota3 = $_GET["n3"];

        $media = ($nota1 + $nota2 + $nota3) / 3;

        print($media >= 6 ? "APROVADO" : "REPROVADO");

    */

    /*Exercício 04: Mostrar se um eleitor é obtigado a votar ou não.*/

        $idade = $_GET["idade"];

        if ($idade >= 16 && $idade < 18 || $idade >= 65){
            print("Com $idade anos de idade, o voto é opcional.");

        } else if ($idade >= 18){
            print("Com $idade anos de idade, o voto é obrigatório.");

        } else {
            print("Pessoas com $idade anos de idade não vota.");
        }
    ?>
</body>
</html>