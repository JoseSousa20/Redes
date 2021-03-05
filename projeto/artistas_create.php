<?php
    include "css.php";
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $nome="";
        $data_nascimento="";
        $nacionalidade="";
    

        if(isset($_POST['nome'])){
            $nome = $_POST['nome'];
        }
        else{
            echo '<script>alert("É obrigatório o preenchimento do Nome.");</script>';
        }

    

        if(isset($_POST['data_nascimento'])){
            $data_nascimento = $_POST['data_nascimento'];
        }



        if(isset($_POST['nacionalidade'])){
            $nacionalidade = $_POST['nacionalidade'];
        }

        $con = new mysqli("localhost","root","","festival");

        if($con->connect_errno!=0){
            echo "Ocorreu um erro no acesso à base de dados.<br>".$con->connect_error;
            exit;
        }

        else{
            $sql = 'insert into artista(nome,data_nascimento,nacionalidade) values(?,?,?)';
            $stm = $con->prepare($sql);
            if($stm!=false){
                $stm->bind_param('sss',$nome,$data_nascimento,$nacionalidade);
                $stm->execute();
                $stm->close();
                
                echo '<script>alert("Artista adicionado com sucesso");</script>';
                echo 'Aguarde um momento. A reencaminhar página';
                header("refresh:5; url=index.php");
            }
            else{
                echo($con->error);
                echo "Aguarde um momento. A reencaminhar página";
                header("refresh:5;url=index.php");
            }
        }
    }
    else{
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Adicionar Artista</title>
</head>
<body>
<h1>Adicionar Artista</h1>
<form action="artistas_create.php" method="post">
<label>Nome</label><input type="text" name="nome" required><br>
<label>Data de Nascimento</label><input type="date" name="data_nascimento"><br>
<label>Nacionalidade</label><input type="text" name="nacionalidade"><br>
<input type="submit" name="enviar"><br>
</form>
</body>
</html>
<?php
    };
?>
