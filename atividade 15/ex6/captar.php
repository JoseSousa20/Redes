<?php
    $salario = $_GET["1"];

    $descinerentes = $salario * 0.15;
    $desccantina = $salario * 0.1;
    $desctransportes = $salario * 0.05;

    echo "Ordenado base: " .$salario. "€<br>";
    echo "Desconto Inerentes: " .$descinerentes. "€<br>";
    echo "Desconto Cantina: " .$desccantina. "€<br>";
    echo "Desconto Transportes: " .$desctransportes. "€<br>";

    $ordenado = $salario - $descinerentes - $desccantina - $desctransportes;

    echo "Ordnado Liquído: " .$ordenado."€";
?>