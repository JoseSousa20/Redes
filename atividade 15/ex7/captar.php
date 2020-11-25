<?php
    $n1 = $_GET["1"];
    
    if($n1 < 18){
        echo "Você tem ".$n1." anos - É MENOR de idade.";
    }
    else if($n1 >=18 && $n1 < 100){
        echo "Você tem ".$n1." anos - É MAIOR de idade.";
    }
    else{
        echo "Você é um Dinossauro";
    }
?>