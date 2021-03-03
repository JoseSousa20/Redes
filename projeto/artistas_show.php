<?php 
    if($_SERVER['REQUEST_METHOD']=="GET"){
        if(!isset($_GET['artista']) || !is_numeric($_GET['artista'])){

            echo '<script>alert("Erro ao abrir artista");</script>';
            echo 'Aguarde um momento.A reencaminhar pagina';
            header("refresh:5; url=index.php");
            exit();
        }
        $idArtista=$_GET['artista'];
        $con=new mysqli("localhost","root","","festival");

        if($con->connect_error!=0){

            echo 'Ocorreu um erro no acesso a base de dados <br>'.$con->connect_error;
            exit();
        }
        else{
            $sql='select * from artista where id_artista=?';
            $stm=$con->prepare($sql);
            if($stm!=false){
                $stm->bind_param('i',$idArtista);
                $stm->execute();
                $res=$stm->get_result();
                $artista=$res->fetch_assoc();
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
    <h2>Detalhes do Artista</h2>

    <?php
        if(isset($artista)){
            echo '<br>';
            echo "<b>Nome:</b> ";
            echo $artista['nome'];
            echo '<br><br>';
            echo "<b>Data de Nascimento:</b> ";
            echo $artista['data_nascimento'];
            echo '<br><br>';
            echo "<b>Nacionalidade:</b> ";
            echo $artista['nacionalidade'];
            echo '<br><br>';
            echo '<button><a href="artistas_edit.php?artista='.$artista['id_artista']. '">Editar</a></button>';
            echo '<br>';
            echo '<button><a href="artistas_delete.php?artista='.$artista['id_artista'].'">Eliminar</a></button>';
        }
        else{
            echo '<h2>Parece que o festival selecionado não existe</h2>';
        }
            
    ?>
    </body>
    </html>