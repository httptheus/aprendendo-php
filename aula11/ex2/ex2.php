<!--02) Criar dinâmicamente 5 caixas de texto em um formulário.-->

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>ex2</title>

    <style>
        * { font-family: monospace; }

        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;

            height: 540px;
        }

        form{
            display: flex;
            flex-direction: column;
        }

        input{
            margin: 6px;
            padding: 8px;
            text-align: center;
            width: 270px;
        }

        button{
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <form method="post" action="mostrarResultado.php">
        <?php
            $numInput = 1;

            while ($numInput <= 5){
                echo "<input type=\"text\" name=\"caixa$numInput\" placeholder=\"Input [$numInput]: Digite qualquer coisa.\">";

                $numInput++;
            }

            echo "<button type=\"submit\">Enviar</button>";
        ?>
    </form>
</body>
</html>