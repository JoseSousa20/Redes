<?php
    $idFestival=$_GET['festival'];
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
            $sql = "update festivais set nome=?,tipo=?,data=?,local=?,descricao=? where id_festival=?";

            $stm=$con->prepare($sql);
            if($stm!=false){
                $stm->bind_param("sssssi",$nome,$tipo,$data,$local,$descricao,$idFestival);
                $stm->execute();
                $stm->close();
                echo '<script>alert("Festival alterado com sucesso!!");</script>';
                echo "Aguarde um momento. A reencaminhar página";
                header("refresh:5; url=index.php");
            }
            else{

            }
        }
    }
    else{
        echo "<h1> Houve um erro ao processar o seu pedido!<br>Irá ser reencaminhado!</h1>";
        header("refresh:5; url=index.php");
    }