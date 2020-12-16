<?php
    $nome = $_POST['nome'];
    $ano = $_POST['data'];
    if($ano == NULL || $nome == NULL)
    {
        echo "ERRO";
    }
    elseif($ano <= 2002)
    {
        echo "O " .$nome. " tem idade para votar.<br>";
    }
    elseif($ano >= 2002){
        echo "O " .$nome. " não tem idade para votar.<br>";
    }

?>