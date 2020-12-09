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


    if($nome == "Ana" && $ano == "2000"){
        session_name('Ana');
        session_start();
    }
?>