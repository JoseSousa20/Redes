<?php 
    session_start();
    if($_SERVER['REQUEST_METHOD']=="GET"){
        if(!isset($_GET['user']) || !is_numeric($_GET['user'])){

            echo '<script>alert("Erro ao abrir User");</script>';
            echo 'Aguarde um momento.A reencaminhar pagina';
            header("refresh:5; url=index.php");
            exit();
        }
        $idUser=$_GET['user'];
        $con=new mysqli("localhost","root","","festival");

        if($con->connect_error!=0){

            echo 'Ocorreu um erro no acesso a base de dados <br>'.$con->connect_error;
            exit();
        }
        else{
            $sql='select * from utilizadores where id=?';
            $stm=$con->prepare($sql);
            if($stm!=false){
                $stm->bind_param('i',$idUser);
                $stm->execute();
                $res=$stm->get_result();
                $user=$res->fetch_assoc();
                $stm->close();
            }
            else{
                echo '<br>';
                echo ($con->error);
                echo'<br>';
                echo"Aguarde um momento.A reencaminhar pagina";
                echo'<br>';
                header("refresh:5; url=index.php");
            }
        }
    }
?>
    <!DOCTYPE html>
    <html>
    <head>
    <meta charset="utf-8">
    <title>Detalhes</title>
    <body>
    <h2>Detalhes do Utilizadores</h2>

    <?php
        if(isset($user)){
            echo '<br>';
            echo "<b>Nome:</b> ";
            echo $user['nome'];
            echo '<br><br>';
            echo "<b>Nome User:</b> ";
            echo $user['user_name'];
            echo '<br><br>';
            echo "<b>Email:</b> ";
            echo $user['email'];
            echo '<br><br>';
            if($_SESSION['login'] =="correto" && $_SESSION['login']){
            echo '<button><a href="utilizador_edit.php?user='.$user['id'].'">Editar</a></button>';
            }
        }
        else{
            echo '<h2>Parece que o user selecionado não existe</h2>';
        }
            
    ?>
    </body>
    </html>