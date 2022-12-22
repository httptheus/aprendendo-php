<?php
    /*Testando switch*/ /*

        $cor = strtoupper($_GET["corSemaforo"]); // retorna o texto em maiúsculas.

        switch ($cor){
            case "VERMELHO":
                $msg = "<p>O sinal está <span   style=\"color: red;\">$cor</span>.    Aguarde.</p>";
            break;

            case "AMARELO";
                $msg = "<p>O sinal está <span   style=\"color: orange;\">$cor</   span>. Atenção.</p>";
            break;

            case "VERDE";
                $msg = "<p>O sinal está <span   style=\"color: green\">$cor</span>.   Pode atravessar.</p>";
            break;

            default:
                $msg = "<p>Cor de semáforo inválida.    </p>";
            break;

        }

        print($msg);

    */

    /*Testando Switch com mais de uma possibilidade.*/
        $fruta = "Abóbora"; 

		switch ($fruta){

			case "Tomate":
			case "Abacaxi":
				print("$fruta é fruta!");
			break;

			case "Abóbora":
			case "Cenoura":
				print("$fruta não é fruta!");
			break;
		}
?>