<?php
    if($_SERVER['REQUEST_METHOD']=="GET"){

        if(!isset($_GET['filme'])|| !is_numeric($_GET['filme'])){
            echo '<script>alert("Erro ao abrir livro");</script>';
            echo 'Aguarde um momento.A reencaminhar página';
            header("refresh:5; url=index.php");
            exit();
        }
        $idFilme=$_GET['filme'];
        $con=new mysqli("localhost","root","","filmes");

        if($con->connect_error!=0){
            echo 'Ocorreu um erro no acesso à base de dados.<br>'.$con->connect_error;
            exit;
        }
        else{
            $sql = 'select * from filmes where id_filme = ?';
            $stm = $con->prepare( $sql);
            if ($stm!=false){
                $stm->bind_param('i',$idFilme);
                $stm->execute();
                $res=$stm->get_result();
                $filme=$res->fetch_assoc();
                $stm->close();
            }
            else{
                echo '<br>';
                echo ($con->error);
                echo '<br>';
                echo "Aguarde um momento. A reencaminhar página";
                echo '<br>';
                header("refresh:5; url=index.php");
            }
        }
    }
?>

    <!DOCTYPE html>
    <html>
    <head>
    <meta charset="ISO-8859-1">
    <meta charset="UTF-8">
    <title>Detalhes</title>
    </head>
    <body>
    <h1>Detalhes do filme</h1>
    <?php

        if (isset($filme)){
            echo '<br>';
            echo 'Titulo: ' .$filme['titulo'];
            echo '<br>';
            echo 'Sinopse: ' .$filme['sinopse'];
            echo '<br>';
            echo 'Idioma: ' .$filme['idioma'];
            echo '<br>';
            echo 'Data de Lançamento: ' .$filme['data_lancamento'];
            echo '<br>';
            echo 'Quantidade: ' .$filme['quantidade'];
            echo '<br>';
        }
        else{
            echo '<h2>Parece que o filme selecionado não exixte.<br>Confirme a susa seleção.</h2>';

        }
    ?>
    <br>
    <a href="filmes_edit.php">Editar Filme</a>
    </body>
    </html>