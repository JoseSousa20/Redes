<?php
    $n1 = $_POST["1"];
        if($num1 < 0){
            echo "Erro";
        }
        else if(is_numeric($n1)){
            echo "Numero é: ".$n1;
        }else{
            echo "ERRO";
        }

?>