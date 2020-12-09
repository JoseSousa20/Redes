<?php
    $n = array();
    for($i=0;$i<15;$i++)
    {
        $n[$i] = rand(1,1000);
        if($n[$i] % 2 == 0)
        {
            echo 'O número ' .$n[$i]. ' é par.<br>';
        }else{
            echo 'O número ' .$n[$i]. ' é impar.<br>';
        }
    }
?>
