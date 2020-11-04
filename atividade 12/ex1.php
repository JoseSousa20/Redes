<?php

    $nome = 'Funções de manipulação de strings no PHPs';
    $nome_maisculo = strtoupper($nome); //Retorna a frase em Maiúsculas;
    echo $nome_maisculo;

    echo '<br>';

    $nome = 'Funções de manipulação de strings no PHPs';
    $nome_minusculo = strtolower($nome); //Retorna a frase em Minúsculas;
    echo $nome_minusculo;

    echo '<br>';

    $nome = 'Funções de manipulação de strings no PHPs';
    $parte = substr($nome, 8); //Retorna um fragmento da string;
    echo $parte;

    echo '<br>';

    $nome = 'Linha de Código';
    $parte = substr($nome, 0, 5); //Retorna um fragmento da string;
    echo $parte;
    

    $repetido = str_repeat('0', 5); //Repete o numero de vezes do argumento inteiro;
    echo $repetido;

    $qtd_char = strlen('Linha de Código'); //Quantidade de caracters;
    echo $qtd_char;


    $texto = "Olá, mundo"; 
    $novo_texto = str_replace('mundo', 'leitor', $texto); //Substitui os caracters numa string;
    echo $novo_texto;


    $texto = "Bem vindo ao Linha de Código!";
    $pos = strpos($texto, "Código"); //Devolve a posição do texto de pesquisa no texto a pesquisar;
    echo $pos;
?>