<?php
    $nota = 25;
    if($nota<10)
    {
        echo 'Aluno <span style="color:#ff0000">REPROVADO</span> com ' .$nota. ' valores.';
        echo '<br>Deverá Trabalhar mais para alcançar resultados positivos';
    }
    elseif ($nota >= 10 && $nota<=20) {
        echo 'Aluno <span style="color:#00ff00">APROVADO</span> com ' .$nota. ' valores.';
        echo '<br>Muito bom trabalho';
    }
    else {
        echo 'Valor da nota é inválido';
    }