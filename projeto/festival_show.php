<?php 
    include "css.php";
    if($_SERVER['REQUEST_METHOD']=="GET"){
        if(!isset($_GET['festival']) || !is_numeric($_GET['festival'])){

            echo '<script>alert("Erro ao abrir festival");</script>';
            echo 'Aguarde um momento.A reencaminhar pagina';
            header("refresh:5; url=index.php");
            exit();
        }
        $idFestival=$_GET['festival'];
        $con=new mysqli("localhost","root","","festival");

        if($con->connect_error!=0){

            echo 'Ocorreu um erro no acesso a base de dados <br>'.$con->connect_error;
            exit();
        }
        else{
            $sql='select * from festivais where id_festival=?';
            $stm=$con->prepare($sql);
            if($stm!=false){
                $stm->bind_param('i',$idFestival);
                $stm->execute();
                $res=$stm->get_result();
                $festival=$res->fetch_assoc();
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
    <h2>Detalhes do festival</h2>

    <?php
        if(isset($festival)){
            echo '<br>';
            echo "<b>Nome:</b> ";
            echo $festival['nome'];
            echo '<br><br>';
            echo "<b>Tipo de festival:</b> ";
            echo $festival['tipo'];
            echo '<br><br>';
            echo "<b>Data do Festival:</b> ";
            echo $festival['data'];
            echo '<br><br>';
            echo "<b>Local:</b> ";
            echo $festival['local'];
            echo '<br><br>';
            echo "<b>Descrição:</b> ";
            echo $festival['descricao'];
            echo '<br><br>';
            echo '<button><a href="festival_edit.php?festival='.$festival['id_festival']. '">Editar</a></button>';
            echo ' ';
            echo '<button><a href="festival_delete.php?festival='.$festival['id_festival'].'">Eliminar</a></button>';
        }
        else{
            echo '<h2>Parece que o festival selecionado não existe</h2>';
        }
            
    ?>
    </body>
    </html>