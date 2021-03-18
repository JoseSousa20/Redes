<?php
?>
<!DOCTYPE html>
<html>
  <head>
  </head>
    <body>
        <h1>Classes IP</h1>
        <h4>Digite o endereço IP que pretende verificar</h4>
        <form action="processa.php">
            <input type="text" name="a">
            <input type="text" name="b">
            <input type="text" name="c">
            <input type="text" name="d">
            <br>
            <br>
            <input type="submit" value="Verificar">
        </form>
        <br>
	<br>
	<h3>Protocolos</h3><br>
	<h4><b>Selecione o protocolo que se deseja</b></h4>
		<br>
		<br>
	<form action="protocolos.php">
		<select name="pr">
			<option value="DNS">DNS</option>
			<option value="FTP">FTP</option>
			<option value="HTTP">HTTP</option>
			<option value="IP">IP</option>
		</select><br><br>
		<br>
		<input type="submit" value="Enviar">
	</form>
    </body>
</html>