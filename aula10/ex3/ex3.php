<?php
    $estado = isset($_POST["selEstado"]) ? $_POST["selEstado"] : "São Paulo";

    $estEscolhido = strtolower($estado);

    switch ($estEscolhido){
        case "acre":
        case "amazonas":
        case "rondônia":
        case "roraima":
        case "amapá":
        case "pará":
        case "tocantins":
            print("<p>Você selecionou <span>$estado</span>. Você mora na <span>Região Norte</span>.</p>");
        break;

        case "rio grande do norte":
        case "paraíba":
        case "pernambuco":
        case "alagoas":
        case "sergipe":
        case "ceará":
        case "maranhão":
        case "piauí":
        case "bahia":
            print("<p>Você selecionou <span>$estado</span>. Você mora na <span>Região Nordeste</span>.</p>");
        break;

        case "mato grosso":
        case "distrito federal":
        case "goiás":
        case "mato grosso do sul":
            print("<p>Você selecionou <span>$estado</span>. Você mora na <span>Região Centro-Oeste</span>.</p>");
        break;

        case "minas gerais":
        case "espírito santo":
        case "rio de janeiro":
        case "são paulo":
            print("<p>Você selecionou <span>$estado</span>. Você mora na <span>Região Sudeste</span>.</p>");
        break;

        case "paraná":
        case "santa catarina":
        case "rio grande do sul":
            print("<p>Você selecionou <span>$estado</span>. Você mora na <span>Região Sul</span>.</p>");
        break;
    }
?>

<style>
    * { <?php echo "font-family: monospace;"; ?> }

    span { <?php echo "font-weight: 900; color: tomato;"; ?> }
</style>