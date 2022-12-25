<?php
    /*Exibindo resultado de multiplicação a partir de dois valores utilizando funções.*/ /*

		function exibirMult($num1, $num2){
			return "$num1 x $num2 = " . ($num1 * $num2);
		}

		echo exibirMult(6, 2); //Retorna a tabuada do 6.

	*/

	/*Funções com múltiplos argumentos: a partir de algumas funções do PHP, tornar uma função apta a receber x valores é totalmente possível. Basta que função, primariamente, não receba nenhum valor prévio. */ /*

		function exibirTerceiroValor(){
			$valores = func_get_args();	//Captura todos os valores e atribui um vetor com o conjunto de valores.
			return $valores[3]; //Vai retornar o terceiro valor passado como argumento.
		}

		echo exibirTerceiroValor(10, 321, 9, 43, 423, 432) . "<br>";
		echo exibirTerceiroValor(33, 999, 4234, 94235, 4332, 44, 8432, 439) . "<br>";

	*/

	/*Funções com múltiplos argumentos: exibindo soma dos números passados como argumento, número de argumentos passado e os números em si.*/

		function somarValores(){
			$arrayValores = func_get_args();
			$numValores = func_num_args();
			$somaTotal = 0;

			for ($i = 0; $i <= $numValores - 1; $i++){
				$somaTotal += $arrayValores[$i];
			}

			echo "A soma total dos valores é " . $somaTotal . "<br>";
		}

		somarValores(1, 2, 3, 4, 5);
		somarValores(3, 2, 1);
?>