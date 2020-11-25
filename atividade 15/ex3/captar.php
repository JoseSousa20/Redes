<?php 
    $n1 = $_POST["txt_valor1"];
    $n2 = $_POST["txt_valor2"];
    $operacao = $_POST["operacao"];

    function soma ($num1, $num2){
        $soma = $num1 + $num2;
        return $soma;
    }

    function div ($num1, $num2){
        $div = $num1 / $num2;
        return $div;
    }

    function mult ($num1, $num2){
        $mult = $num1 * $num2;
        return $mult;
    }

    function sub ($num1, $num2){
        $sub = $num1 - $num2;
        return $sub;
    }

    switch($operacao){
        case($operacao=="soma"):
            echo "Soma: " .soma($n1,$n2)."<br>";
        break;
        case($operacao=="sub"):
            echo "Subtração: " .sub($n1,$n2)."<br>";
        break;
        case($operacao=="mult"):
            echo "Multriplicação :" .mult($n1,$n2)."<br>";
        break;
        case($operacao=="div"):
            echo "Divisão :" .div($n1,$n2);
        break;
    }
?>
