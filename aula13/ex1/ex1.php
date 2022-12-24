<?php
    /*01) Mostrar várias contagens diferentes utilizando o for.*/

    for ($i = 0; $i <= 10; $i++){
        print($i . "<br>");
    }

    echo "<br><br>";

    for ($i = 20; $i >= 0; $i -= 2){
        print($i . "<br>");
    }

    echo "<br><br>";

    for ($i = 1; $i <= 10; $i++){
        $subVar = "valor" . $i;
        $$subVar = $i;

        echo '[$valor' . $i . "]: " . $$subVar . "<br>";
    }

    echo "<br>" . $valor6;
?>