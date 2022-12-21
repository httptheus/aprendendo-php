<?php
    $ano = isset($_POST["anoNasc"]) ? $_POST["anoNasc"] : date("Y");
    $anoAtual = date("Y");

    if ($anoAtual - $ano >= 18){
        print("Você tem " . ($anoAtual - $ano) . " anos de idade, portanto é de maior. Pode dirigir e votar.");
    } else if ($anoAtual - $ano >= 16 and $anoAtual - $ano < 18){
        print("Você tem " . ($anoAtual - $ano) . " anos de idade, portanto é de menor. Não pode dirigir, mas o voto é opcional.");

    } else {
        print("Você tem " . ($anoAtual - $ano) . " anos de idade, portanto é de menor. Não dirige nem vota.");
    }

?> 