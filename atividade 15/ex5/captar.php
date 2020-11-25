<?php
    $num1 = $_GET["1"];
    $num2 = $_GET["2"];
    $total = $num1 + $num2;
    echo "A turma tem: " .$total. "alunos<br>";

    $perRapazes = ($num1 * 100) / $total;
    echo "A percentagem de rapazes é: " .$perRapazes."%<br>";

    $perRaparigas = ($num2 * 100) / $total;
    echo "A percentagem de raparigas é: " .$perRaparigas."%<br>";
?>