<?php
$numero = 50;

switch ($numero) {
    case ($numero > 100 ):
        echo 'Valor muito alto';
    break;
    case ($numero < 80 && $numero > 51):
        echo 'Valor médio';
    break;
    case ($numero === 50):
        echo 'Valor Perfeito';
    break;
    case ($numero  <= 10):
        echo 'Valor muito baixo';
    break;
    case ($numero == 0):
        echo 'Sem valor';
    break;
}