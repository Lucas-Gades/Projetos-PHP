<?php
    
    function mediageral($n){
        $somar = array_sum($n);
        $media = count($n);
        $resultado = ($somar / $media);
        return  sprintf("Sua media final foi de "."%.2f",$resultado);
    };


    $numeros = [8,4.5,5,3];
    echo mediageral($numeros);


?>