<?php
    /* Estrutura do while */

    $i = 1;

    do {
        $subVar = "var" . $i;
        $$subVar = $i;
        $i++;

    } while ($i <= 10);

    $i = 1;

    do {
        $exibeVar = "var" . $i;
        echo "[var$i]: " . $$exibeVar . "<br>";
        $i++;

    } while ($i <= 10);
?>