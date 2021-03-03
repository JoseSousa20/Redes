<?php
    include "css.php";
    if($_SERVER['REQUEST_METHOD']=="GET"){

    if(isset($_GET['festival']) && is_numeric($_GET['festival'])){
        $idFestival = $_GET['festival'];
        $con = new mysqli("localhost","root","","festival");

        if($con->connect_errno!=0){
            echo "<h1>Ocorreu um erro no acesso à base de dados.<br>".$con->connect_error."</h1>";
            exit();
        }
        $sql = "Select * from festivais where id_festival=?";
        $stm = $con->prepare($sql);

        if($stm!=false){
            $stm->bind_param("i",$idFestival);
            $stm->execute();
            $res=$stm->get_result();
            $festival = $res->fetch_assoc();
            $stm->close();
        }
    
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="ISO-8859-1">
    
</head>
<body>
    <h1>Editar festival</h1>
    <form action="festival_update.php?festival=<?php echo $festival['id_festival']; ?>" method="post">
        <label>Nome</label><input type="text" name="nome" required value="<?php echo $festival['nome'];?>"><br>
        <label>Tipo</label><input type="text" name="tipo" required value="<?php echo $festival['tipo'];?>"><br>
        <label>Data</label><input type="date" name="data" required value="<?php echo $festival['data'];?>"><br>
        <label>Local</label><input type="text" name="local" required value="<?php echo $festival['local'];?>"><br>
        <label>Descrição</label><input type="text" name="descricao" required value="<?php echo $festival['descricao'];?>"><br>
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
