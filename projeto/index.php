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
    
    <button><a href="lista_festival.php">Festivais</a></button>
    <button><a href="lista_artistas.php">Artistas</a></button>
    <button><a href="login.php">Login</a></button>
    <button><a href="register.php">Register</a></button>
    <button><a href="lista.php">Listagem de utilizadores</a></button>
    
<br>
</body>
</html>

<?php
    }
?>