<?php
    $texto = isset($_POST["txtTexto"]) ? $_POST["txtTexto"] : "[Campo não informado]";
    $tamFonte = isset($_POST["tamanhoFonte"]) ? $_POST["tamanhoFonte"] : "14px";
    $corFonte = isset($_POST["corFonte"]) ? $_POST["corFonte"] : "black";

    echo "<p>$texto<p>";
?>

<style>
    p{
        font-size: <?php echo $tamFonte; ?>;
        color: <?php echo $corFonte; ?>;
    }
</style>