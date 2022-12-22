<?php
    $dia = isset($_POST["diaSem"]) ? $_POST["diaSem"] : 1;

    switch ($dia){
        case 1:
        case 7:
            print("<p>É dia de folga.</p>");
        break;

        default:
            print("<p>É dia útil.</p>");
        break;
    }
?>