<?php
    $num = isset($_POST["numMult"]) ? $_POST["numMult"] : 1;

    $mult = 0;

    do {
        echo "$num x $mult = " . ($num * $mult) . "<br>";
        $mult++;

    } while ($mult <= 10);
?>