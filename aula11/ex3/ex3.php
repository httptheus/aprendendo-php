<?php
    $inicio = isset($_POST["numInicio"]) ? $_POST["numInicio"] : 0;
    $fim = isset($_POST["numFim"]) ? $_POST["numFim"] : 0;
    $i = isset($_POST["valorIncremento"]) ? $_POST["valorIncremento"] : 0;

    if ($inicio <= $fim){
        while ($inicio <= $fim){
            echo "$inicio ";
            $inicio += $i;

        }
    } else if ($inicio >= $fim) {
        while ($inicio >= $fim){
            echo "$inicio ";
            $inicio -= $i;

        }
    }
?>