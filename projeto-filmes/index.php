<?php
    session_start();
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
    <h1>Lista de filmes</h1>
    <?php
        $stm = $con->prepare('select * from filmes');
        $stm->execute();
        $res=$stm->get_result();
        while($resultado = $res->fetch_assoc()){
            echo '<a href="filmes_show.php?filme='.$resultado['id_filme'].'">';
            echo $resultado['titulo'];
            echo '</a>';
            echo '<br>';
        }
        $stm->close();
        echo "<br>";
        $stm = $con->prepare('select * from utilizadores');
        $stm->execute();
        $res=$stm->get_result();
        while($resultado = $res->fetch_assoc()){
            if($resultado['id'] == $_SESSION['id_user']){
                echo '<a href="utilizador_edit.php?user='.$resultado['id'].'">Editar User</a><br>';
            }
        }
        $stm->close();
    ?>
    <a href="lista_atores.php">Atores</a><br>
    <a href="lista_realizadores.php">Realizadores</a><br>
    <a href="filmes_create.php">Adicionar Filmes</a><br>
    <a href="login.php">Login</a><br>
    <a href="register.php">Register</a><br>
    <a href="lista.php">Listagem de utilizadores</a><br>
    
<br>
</body>
</html>

<?php
    }
?>