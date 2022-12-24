<?php
    $num = isset($_POST["numInput"]) ? $_POST["numInput"] : 0;

    function isPrimo($n){
        if ($n > 1){
            if ($n == 2){
                return "$n é primo.";

            }
            
            return $n % 1 == 0 && $n % $n == 0 && $n % 2 != 0 ? "$n é primo." : "$n não é primo.";

        } else {
            return "$n não é primo.";
        }
    }

    echo isPrimo($num);
?>