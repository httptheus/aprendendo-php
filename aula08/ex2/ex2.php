<?php
    $nome = isset($_POST["nomeUsuario"]) ? $_POST["nomeUsuario"] : "[Não informado]";
    $anoNasc = isset($_POST["anoNascUsuario"]) ? $_POST["anoNascUsuario"] : 0;
    $sexo = isset($_POST["sexoUsuario"]) ? $_POST["sexoUsuario"] : "[Não informado]";

    print("Olá, $nome.<br>");
    print("Você nasceu no ano de $anoNasc e é do sexo $sexo.<br>");
    print("Você tem entre " . (date("Y") - $anoNasc) . "/" . (date("Y") - $anoNasc - 1) . " anos de idade.")

    //date() captura um valor de data localmente. "Y" maiúsculo captura o ano inteiro, enquanto que "y" minúsculo captura o valor de ano simplificado.

    //O método isset() determina se um valor foi passado ou não.
?>