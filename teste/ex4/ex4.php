<?php
    $maior = 0;
    $menor = 1000;
    $produto = 1;
    $soma = 0;
    for($i=0;$i<20;$i++)
    {
        $n[$i] = rand(1,1000);
        echo $n[$i]. "<br>";
        $soma = $soma + $n[$i];
        $produto = $produto * $n[$i];
    }
    for($i=1;$i<20;$i++){
        if($maior>$n[$i]){
            $maior = $maior;
        }else{
        $maior = $n[$i];
        }
    }
    for($k=1;$k<20;$k++){
        if($maior>$n[$k]){
            $maior = $maior;
        }else
        {
            $maior = $n[$k];
        }
    }

    for($h=1;$h<20;$h++){
        if($menor<$n[$h]){
            $menor = $menor;
        }else{
        $menor = $n[$h];
        }
    }
    for($h=1;$h<20;$h++){
        if($menor<$n[$h]){
            $menor = $menor;
        }else
        {
            $menor = $n[$h];
        }
    }

    $media = $soma/20;
    echo 'O maior numero é: ' .$maior. " <br>";
    echo 'O menor numero é: ' .$menor. " <br>";
    echo 'O produto é: ' .$produto. " <br>";
    echo 'A média é: ' .$media. " <br>";