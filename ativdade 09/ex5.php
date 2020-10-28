<?php   
    $num = 0;
    $soma = 0;
    while($soma < 1000){
        
        $soma = $soma+$num;
        echo $soma.'<br>';
        $num = rand(1,100);
    }
?>