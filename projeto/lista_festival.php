<?php

    $con = new mysqli("localhost","root","","festival");
    if($con->connect_errno!=0){
        echo "Ocorreu um erro no acesso à base de dados ".$con->connect_error;
        exit;
    }
    else{
?>
    <!DOCTYPE html>
    <html>
    <head>
    <meta charset="ISO-8859-1">
    <title>Festival</title>
    </head>
    <body>
    <h1>Lista de  Festivais</h1>
    <?php
        $stm = $con->prepare('select * from festivais');
        $stm->execute();
        $res=$stm->get_result();
        while($resultado = $res->fetch_assoc()){
            echo '<a href="festival_show.php?festival='.$resultado['id_festival'].'">';
            echo '<h5>'.$resultado['nome'].'</h5>';
            echo '</a>';
        }
        $stm->close();
    ?>
    <br>
    <button><a href="festival_create.php">Adicionar</a></button><br>
    <button><a href="index.php">Index</a></button>
<br>
</body>
</html>

<?php
    }
?>