<?php 
    $n1 = $_POST["txt_valor1"];
    $n2 = $_POST["txt_valor2"];

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

    echo "Soma: " .soma($n1,$n2)."<br>";
    echo "Subtração: " .sub($n1,$n2)."<br>";
    echo "Multriplicação :" .mult($n1,$n2)."<br>";
    echo "Divisão :" .div($n1,$n2);
?>