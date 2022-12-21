<?php
    $n1 = isset($_POST["nota1"]) ? number_format($_POST["nota1"], 1) : 0;

    $n2 = isset($_POST["nota2"]) ? number_format($_POST["nota2"], 1) : 0;

    $media = number_format(($n1 + $n2) / 2, 1);

    if ($media >= 7){
        print("<p>A média entre " . $n1 . " e " . $n2 . " é igual a " . $media . "<br> Situação do aluno: <span class=\"ifAprovado\">APROVADO</span>.</p>");

    } else if ($media >= 5 && $media < 7){
        print("<p>A média entre " . $n1 . " e " . $n2 . " é igual a " . $media . "<br> Situação do aluno: <span class=\"ifRecuperacao\">RECUPERAÇÃO</span>.</p>");

    } else if ($media < 5){
        print("<p>A média entre " . $n1 . " e " . $n2 . " é igual a " . $media . "<br> Situação do aluno: <span class=\"ifReprovado\">REPROVADO</span>.</p>");

    }

?>

<style>
    * { font-family: monospace; }

    .ifAprovado, .ifRecuperacao, .ifReprovado{
        font-weight: 900;
    }

    .ifAprovado{
        color: green;
    }

    .ifRecuperacao{
        color: orange;
    }

    .ifReprovado{
        color: red;
    }
</style>