<?php
$num = rand(1,10);
for($i = 1; $i <= 10; $i++){
    $res = $num * $i;
    echo $num.' x ' . $i . ' = ' . $res .'<br>';
}
?>