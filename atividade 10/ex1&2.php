<?php
    $cores = array('vermelho', 'azul', 'verde', 'amarelo');
    echo $cores[0];
    echo '<br>';
    echo $cores[1];
    echo '<br>';
    echo $cores[2];
    echo '<br>';
    echo $cores[3];
    echo '<br>';

    $a = array('Tesla', 2000, 3.0, 'BMW', 'Fiat');
    echo $a[1];
    echo '<br>';

    $a[1]= 2000;
    echo $a[1];
    echo '<br>';

    $a[]="Vila das Aves";
    $a[]="AEDAH";
    foreach ($a as $item){
        echo $item . '<br>';
    }
?>