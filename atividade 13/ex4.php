<?php
    $num = rand(1, 100);
    function par($num){
    if($num % 2 ==0){
        $resultado = true;
    }else{
        $resultado = false;
    }
    return $resultado;
    }
    $devolve = par(8);
    echo $devolve;
?>