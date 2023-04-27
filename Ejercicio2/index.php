<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<center>
    <div class="divmenu">
	<h1>Login</h1>
	<form action="validacion.php" method="post">
        <div class="input"><label>Ingrese su Usuario:</label>
		<input type="text" name="usuario" required pattern="^[a-zA-Z]+$"></div>
		<div class="inputs"><label>Ingrese su Contraseña:</label>
		<input type="password" name="contraseña" required pattern="^[a-zA-Z0-9]+$"></div>
		
        <br>
		<input type="submit" value="Enviar" id="boton">
	</form>
</div>
</center>
</body>
</html>
