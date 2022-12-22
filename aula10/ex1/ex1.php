<?php
    $num = isset($_POST["numInput"]) ? $_POST["numInput"] : 0;
    $op = isset($_POST["tipoOp"]) ? $_POST["tipoOp"] : "dobro";

    switch ($op){
        case "dobro";
            $resultado = "<p>O dobro de $num é " . ($num * 2) . "</p>";
        break;

        case "cubo";
            $resultado = "<p>$num<sup>3</sup> = " . ($num ** 3) . "</p>";
        break;

        case "raizq":
            $resultado = "<p>A raíz quadrada de $num é " . (sqrt($num)) . "</p>";
        break;
    }

    print($resultado);
?>