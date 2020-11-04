<?php
    $frase = 'Estou a aprender PHP na secundária';
    echo 'Primeira frase: ', $frase;
    echo '<br>';
    alterar ($frase);

    function alterar($frase){
        echo 'Segunda frase alterada: ', str_replace('Estou a aprender PHP na secundária','Estou a aprender PHP na escola',$frase);
    }
?>