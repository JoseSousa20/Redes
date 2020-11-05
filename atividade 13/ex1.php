<?php
    $raio = 20;
    $pi = 3.14;
    function area($raio, $pi){
    $area = $pi * ($raio ** 2);
    return $area;
    }
    $resultado = area($raio, $pi);
    echo 'A área é: ' .$resultado;
?>