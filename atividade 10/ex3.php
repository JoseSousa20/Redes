<?php
$dados= array(2, 5, 10, 'Maria',2.5, 'Rui', 8, 'A', 3, 'B');
echo 'Valores do array: ';
for($i=0; $i<10; $i++)
    echo $dados [$i]. ' ';
    echo '<br>------------------------------------------';
    echo '<br> Valores do array: <br>';
for($i=0; $i < 10; $i++)
echo $dados[$i].'<br>';
echo '--------------------------------------------------<br>';
$dados[]=7;
$dados[]='Carlos';
$dados[1]='Pedro';
$dados[4]=50;
$dados[5]='Ruizinho';
$dados[7]=' ';
echo 'Valores do array: ';
for($i=0; $i<12; $i++)
echo $dados[$i].' ';
echo '<br>';
echo '----------------------------------------------------<br>';
echo $dados[2].' ';
echo $dados[5].' ';;
echo $dados[9].' ';;
echo '<br>-------------------------------------------------------------';