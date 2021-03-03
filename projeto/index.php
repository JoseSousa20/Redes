<?php
    session_start();
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
    <h3>Festivais</h3>
    <?php
        echo "<br>";
        $stm = $con->prepare('select * from utilizadores');
        $stm->execute();
        $res=$stm->get_result();
        while($resultado = $res->fetch_assoc()){
            if($resultado['id'] == $_SESSION['id']){
                echo '<a href="utilizador_edit.php?user='.$resultado['id'].'">Editar User</a><br>';
            }
        }
        $stm->close();
    ?>
    <button><a href="lista_festival.php">Festivais</a></button><br>
    <button><a href="lista_artistas.php">Artistas</a></button><br>
    <button><a href="login.php">Login</a></button><br>
    <button><a href="register.php">Register</a></button><br>
    <button><a href="lista.php">Listagem de utilizadores</a></button><br>
    
<br>
</body>
</html>

<?php
    }
?>