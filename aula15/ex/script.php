<?php
    function somarNumeros(...$n){
        $arrayValores = func_get_args();
        $total = 0;

        for ($i = 0; $i <= func_num_args() - 1; $i++){
            $total += $arrayValores[$i];
        }

        return $total;
    }
?>