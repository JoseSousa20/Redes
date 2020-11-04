<?php
    $a = array('a' => 'maça','b' =>'banana');
    $b = array('a' => 'kiwi','b' => 'ananás', 'c' => 'morango');
    $juntos = array_merge($a, $b);
    $juntosb = array_merge($b, $a);

    print_r($juntos);
    echo '<br>';
    print_r($juntosb);
?>