<?php
    $numMult = isset($_POST["numMult"]) ? $_POST["numMult"] : 1;

    for ($mult = 0; $mult <= 10; $mult++){
        echo "$numMult x $mult = " . ($numMult * $mult) . "<br>";
    }
?>