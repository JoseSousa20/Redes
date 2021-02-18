<?php
    session_start();
    if(!isset($_SESSION['login'])){
        $_SESSION['login']="incorreto";
    }
    if($_SESSION['login']== "correto" && isset($_SESSION['login'])){
        if($_SERVER['REQUEST_METHOD']=="GET"){
            if(!isset($_GET['ator']) || !is_numeric($_GET['ator'])){
                echo '<script>alert("Erro ao abrir ator");</script>';
                echo 'Aguarde um momento. A reencaminhar página';
                header("refresh:5;url=index.php");
                exit();
            }
            $idAtor=$_GET['ator'];
            $con = new mysqli("localhost","root","","filmes");
    
            if($con->connect_errno!=0){
                echo 'Occoreu um erro no acesso à base de dados. <br>'.$con->connect_error;
                exit();
            }
            else{
                $sql = 'select * from atores where id_ator = ?';
                $stm = $con->prepare($sql);
                if($stm!=false){
                    $stm->bind_param('i',$idAtor);
                    $stm->execute();
                    $res=$stm->get_result();
                    $ator = $res->fetch_assoc();
                    $stm->close();
                }
                else{
                    echo '<br>';
                    echo ($con->error);
                    echo '<br>';
                    echo "Aguarde um momento.A reencaminhar página";
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
<title>Detalhes</title>
</head>
<body>
<h1>Detalhes do Ator</h1>
<?php
    if(isset($ator)){
        echo '<br>';
        echo "Nome: ".$ator['nome'];
        echo '<br>';
        echo "Data Nascimento: ".$ator['data_nascimento'];
        echo '<br>';
        echo "Nacionalidade: ".$ator['nacionalidade'];
        echo '<br>';
    }
    else{
        echo '<h2>Parece que o filme selecionado não existe. <br>Confirme a sua seleção.</h2>';
    }
    echo '<a href="atores_edit.php?ator='.$ator['id_ator'].'">Editar Ator</a><br>';
    echo '<a href="atores_delete.php?ator='.$ator['id_ator'].'">Eliminar Ator</a>';
?>
</body>
</html>
<?php
    }
    else{
        echo "Precisa estar logado.<br>";
        echo "A ser redirecionado para a pagina de login";
        header("refresh:5; url=login.php");
    }
?>