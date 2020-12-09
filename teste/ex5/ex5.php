<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <?php
            $dias = array('Domingo','Segunda-feira','Terça-feira','Quarta-feira','Quinta-feira','Sexta-feira','Sábado');
            $meses = array('Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho','Julho','Agosto', 'setembro', 'Outubro', 'Novembro', 'Dezembro');
        ?>
        <form action="captar.php" method="post">
            <select name="dias">
            <?php 
               for($i=0;$i<7;$i++){
                   echo '<option value="' .$dias[$i]. '">' .$dias[$i].'</option>';
               }
            ?>
            </select>

            <select name="meses">
            <?php 
               for($i=0;$i<12;$i++){
                   echo '<option value="' .$meses[$i]. '">' .$meses[$i].'</option>';
               }
            ?>
            </select>
            <td><input type="submit" name="enviar" value="Enviar"></input></td>
        </form>
    </body>
</html>
