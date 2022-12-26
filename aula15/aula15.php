<?php
    /*Passagem por referência: tornando um valor fora do escopo de uma função dependente do valor de parâmetro. Isso significa que o valor de uma variável externa que está ligada a variável de parâmetro vai refletir no seu valor também.*/ /*
        function somarMaisDois(&$x){
            $x += 1;
            return $x;
        }

        $valor1 = 5;
        echo $valor1 . "<br>";

        echo somarMaisDois($valor1) . "<br>";

        echo $valor1;

    */

    /* *** */

    /*Passagem POR VALOR: variáveis passadas não sofrerão alterações.*/

		/*Passagem por Valor: métodos externos não terão valores alterados por não estarem referenciados a variável de parâmetro.*/ /*

		    function somarDois($x){
                $x += 2;
                return $x;
             }
         
             $n1 = 5;
             echo $n1 . "<br>";	#Retorna 5.
         
             echo somarDois($n1) . "<br>";	#Passando valor de variável 
                                            #como parâmetro. Retorna 7.
         
             echo $n1;	#Retorna '5'. Isso porque apenas o valor foi    passado como parâmetro de valor.

        */

    /*Passagem POR REFERÊNCIA: variáveis passadas sofrerão alterações por estarme ligadas as variáveis de parâmetro.

		/*Passagem por Referência: métodos externos terão valores alterados por estarem referenciados a variável de parâmetro.*/

		    function somarDois(&$x){ #A partir disso, toda variável passada como parâmetro a cada chamada de método estará diretamente ligada a esta variável.
		       $x += 2;
		       return $x;
		    }

		    $n1 = 5;
		    echo $n1 . "<br>";	#Retorna 5.

		    echo somarDois($n1) . "<br>";	#Passando valor de variável como parâmetro. Retorna 7.

		    echo $n1;	#Retorna '7'. Isso porque o valor está associado variável de parâmetro da função.
?>