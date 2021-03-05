<?php
    $idArtista=$_GET['artista'];
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $nome="";
        $nacionalidade="";
        $data_nascimento="";
    

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
            $sql = "update artista set nome=?,data_nascimento=?,nacionalidade=? where id_artista=?";

            $stm=$con->prepare($sql);
            if($stm!=false){
                $stm->bind_param("sssi",$nome,$data_nascimento,$nacionalidade,$idArtista);
                $stm->execute();
                $stm->close();
                echo '<script>alert("Artista alterado com sucesso!!");</script>';
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