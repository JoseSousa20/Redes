<?php
    $con = new mysqli("localhost","root","","filmes");
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
    <title>Filmes</title>
    </head>
    <body>
    <h1>Lista de Atores</h1>
    <?php
        $stm = $con->prepare('select * from atores');
        $stm->execute();
        $res=$stm->get_result();
        while($resultado = $res->fetch_assoc()){
            echo '<a href="atores_show.php?ator='.$resultado['id_ator'].'">';
            echo $resultado['nome'];
            echo '</a>';
            echo '<br>';
        }
        $stm->close();
    ?>
    <a href="atores_create.php">Adicionar</a><br>
    <a href="index.php">Index</a>
<br>
</body>
</html>

<?php
    }
?>