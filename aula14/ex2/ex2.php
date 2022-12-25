<?php
    //Criar uma função que some dois valores numéricos inteiros.

    function exibirSoma($num1, $num2){
        return $num1 + $num2;
    }

    $n1 = 6;
    $n2 = 3;

    echo "A soma entre $n1 e $n2 é igual a " . exibirSoma($n1, $n2) . ".";
?>