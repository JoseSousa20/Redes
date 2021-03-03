<?php
    include "css.php";
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $nome="";
        $tipo="";
        $data="";
        $local="";
        $descricao="";
    

        if(isset($_POST['nome'])){
            $nome = $_POST['nome'];
        }
        else{
            echo '<script>alert("É obrigatório o preenchimento do Nome.");</script>';
        }

        if(isset($_POST['tipo'])){
            $tipo = $_POST['tipo'];
        }

        if(isset($_POST['data'])){
            $data = $_POST['data'];
        }

        if(isset($_POST['local'])){
            $local = $_POST['local'];
        }

        if(isset($_POST['descricao'])){
            $descricao = $_POST['descricao'];
        }

        $con = new mysqli("localhost","root","","festival");

        if($con->connect_errno!=0){
            echo "Ocorreu um erro no acesso à base de dados.<br>".$con->connect_error;
            exit;
        }

        else{
            $sql = 'insert into festivais(nome,tipo,data,local,descricao) values(?,?,?,?,?)';
            $stm = $con->prepare($sql);
            if($stm!=false){
                $stm->bind_param('sssss',$nome,$tipo,$data,$local,$descricao);
                $stm->execute();
                $stm->close();
                
                echo '<script>alert("Festival adicionado com sucesso");</script>';
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
<title>Adicionar Festival</title>
</head>
<body>
<h1>Adicionar Festival</h1>
<form action="festival_create.php" method="post">
<label>Nome</label><input type="text" name="nome" required><br>
<label>Tipo</label><input type="text" name="tipo"><br>
<label>Data</label><input type="date" name="data"><br>
<label>Local</label><input type="text" name="local"><br>
<label>Descrição</label><input type="text" name="descricao"><br>
<input type="submit" name="enviar"><br>
</form>
</body>
</html>
<?php
    };
?>