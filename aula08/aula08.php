<?php
    //Capturando os valores de um input de acordo com os valores de seus 'name' respectivos dentro do formulário.
    //O método POST acaba sendo mais seguro do que o método GET, ja que as informações não são explicitas na URL.
    $v1 = $_POST["valor1"];

    print("O valor enviado foi " . $v1 . ".<br>");
    print("A raíz quadrada de $v1 é " . number_format(sqrt($v1), 0) . ".");
?>