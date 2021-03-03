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
    <h1>Lista de Artistas</h1>
    <?php
        $stm = $con->prepare('select * from artista');
        $stm->execute();
        $res=$stm->get_result();
        while($resultado = $res->fetch_assoc()){
            echo '<a href="artistas_show.php?artista='.$resultado['id_artista'].'">';
            echo $resultado['nome'];
            echo '</a>';
            echo '<br>';
        }
        $stm->close();
    ?>
    <br>
    <button><a href="artistas_create.php">Adicionar</a></button><br>
    <button><a href="index.php">Index</a></button>
<br>
</body>
</html>

<?php
    }
?>