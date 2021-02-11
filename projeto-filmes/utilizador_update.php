<?php
    $idUser=$_GET['user'];
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $user = "";
        $email= "";
        if(isset($_POST['user_name'])){
            $user = $_POST['user_name'];
        }
        else{
            echo '<script>alert("É obrigatório o preenchimento do titulo.");</script>';
        }
        if(isset($_POST['email'])){
            $email= $_POST['email'];
        }
        else{
            echo '<script>alert("É obrigatório o preenchimento do titulo.");</script>';
        }

        $con = new mysqli("localhost","root","","filmes");

        if($con->connect_errno!=0){
            echo "Ocorreu um erro no acesso à base de dados.<br>".$con->connect_error;
            exit;
        }
        else{
            $sql = "update utilizadores set user_name=?,email=? where id=?";

            $stm=$con->prepare($sql);
            if($stm!=false){
                $stm->bind_param("ssi",$user,$idUser,$email);
                $stm->execute();
                $stm->close();
                echo '<script>alert("User alterado com sucesso!!");</script>';
                echo "Aguarde um momento. A reencaminhar página";
                header("refresh:5; url=index.php");
            }
        }
    }
    else{
        echo "<h1> Houve um erro ao processar o seu pedido!<br>Irá ser reencaminhado!</h1>";
        header("refresh:5; url=index.php");
    }
