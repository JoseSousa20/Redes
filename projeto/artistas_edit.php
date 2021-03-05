<?php
    include "css.php";
    if($_SERVER['REQUEST_METHOD']=="GET"){

    if(isset($_GET['artista']) && is_numeric($_GET['artista'])){
        $idArtista = $_GET['artista'];
        $con = new mysqli("localhost","root","","festival");

        if($con->connect_errno!=0){
            echo "<h1>Ocorreu um erro no acesso à base de dados.<br>".$con->connect_error."</h1>";
            exit();
        }
        $sql = "Select * from artista where id_artista=?";
        $stm = $con->prepare($sql);

        if($stm!=false){
            $stm->bind_param("i",$idArtista);
            $stm->execute();
            $res=$stm->get_result();
            $artista = $res->fetch_assoc();
            $stm->close();
        }
    
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="ISO-8859-1">
    
</head>
<body>
    <h1>Editar Artista</h1>
    <form action="artistas_update.php?artista=<?php echo $artista['id_artista']; ?>" method="post">
        <label>Nome</label><input type="text" name="nome" required value="<?php echo $artista['nome'];?>"><br>
        <label>Data de Nascimento</label><input type="date" name="data_nascimento" required value="<?php echo $artista['data_nascimento'];?>"><br>
        <label>Nacionalidade</label><input type="text" name="nacionalidade" required value="<?php echo $artista['nacionalidade'];?>"><br>
        <input type="submit" name="enviar"><br>
    </form>
</body>
<?php
 }
 else{
     echo ("<h1>Houve um erro ao processar o seu pedido.<br>Dentro de segundos será reencaminhado!</h1>");
     header("refresh:5; url=index.php");
 }
}