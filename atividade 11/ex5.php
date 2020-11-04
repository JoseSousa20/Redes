<?php
    $equipas = array(
        'SLB' => array(
            'nome_completo' => 'Sport Lisboa e Benfica',
            'estadio' => 'Estádio da Luz',
            'localidade' => 'Lisboa',
            'pais' => 'Portugal'
        ),
        'VSC' => array(
            'nome_completo' => 'Vitória Sport Clube',
            'estadio' => 'Estádio D.Afonso Henriques',
            'localidade' => 'Guimarães',
            'pais' => 'Portugal'
        ),
        'CDA' => array(
            'nome_completo' => 'Clube Desportivo das Aves',
            'estadio' => 'Estádio do Clube Desportivo das Aves',
            'localidade' => 'Vila das Aves',
            'pais' => 'Portugal'
        ),
        'Wolves' => array(
            'nome_completo' => 'Wolverhampton Wanderers Football Club',
            'estadio' => 'Molineux Stadium',
            'localidade' => 'Wolverhampton',
            'pais' => 'Inglaterra'
        )
    );  
    foreach($equipas as $clubes=>$equipas){
        echo '<h1>' . $clubes . '</h1>';
        foreach ($equipas as $nome => $detalhe) {
            echo '<b>'.$nome . '</b> »»»' . $detalhe . '<br>';
        }
    }
?>