<?php
            $a=array(
                array(0,0),
                array(1,1),
                array(2,2),
                array(3,3),
                array(4,4),
                array(5,5),
                array(6,6),
                array(7,7),
                array(8,8),
                array(9,9),
            );
            $soma=0;
            $maior=0;
            foreach($a as $valor){
                foreach($valor as $key=>$valor1){
                    if($valor1 > $maior){
                        $maior=$valor1;
                    }
                }
            }
            $segundo=$a[0][0];
            for($linha=0;$linha<10;$linha++){
                for($coluna=0;$coluna <2;$coluna++){
                    if($segundo < $a[$linha][$coluna] && $a[$linha][$coluna] < $maior){
                        $segundo=$a[$linha][$coluna];
                    }
                    $soma += $a[$linha][$coluna];
                }
            }
            echo "<h3>Valor da soma: $soma</h3>";
            echo "<h3>Valor maior: $maior</h3>";
            echo "<h3>Segundo maior valor: $segundo</h3>";
?>