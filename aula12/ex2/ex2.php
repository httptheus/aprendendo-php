<?php
    $num = isset($_POST["numVal"]) ? $_POST["numVal"] : 0;

    $mult = $num;
    $fatorial = 1;

    do{
        $fatorial = $fatorial * $mult;
        $mult--;

    } while ($mult >= 1);

    echo "$num! = $fatorial";
?>