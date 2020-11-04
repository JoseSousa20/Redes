<?php
    $pais = "Portugal";
    caracter1 ($pais);


    function caracter1 ($pais){
        echo 'O quarto e o quinto caracter são: ', substr($pais,3,2);
    }
?>