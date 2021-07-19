<!DOCTYPE HTML>
<html lang="es">
	<head>
		<meta charset="utf-8" />
		<title>Formulario en PHP</title>
	</head>
	<body>
<!--                POST.- envia información mediante la url pero confidecial 
                GET.- eniva la información mediante url pero visible-->
		<h1>Formulario en PHP</h1>
		<form method="POST" action="recibir.php">
			<p>
				<label for="nombre">Nombre</label>
				<input type="text" name="nombre" />
			</p>
			
			<p>
				<label for="apellidos">Apellidos</label>
				<input type="text" name="apellidos" />
			</p>
			
			<input type="submit" value="Enviar datos"/>
		</form>
	</body>
</html>
