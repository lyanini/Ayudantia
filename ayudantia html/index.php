<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	
</head>
<body>
	<form action="wix.php" method="POST">
		Ancho maximo: <input type="text" name="ancho_max"><br>
		Ancho minimo: <input type="text" name="ancho_min"><br>
		Alto maximo: <input type="text" name="alto_max"><br>	
		Alto minimo: <input type="text" name="alto_min"><br>
		Texto:  <br><textarea  rows="5" cols="50" name="texto"></textarea><br>
		Corlor: <input type="color"	name="color"><br>

		<input type="submit" name="enviar" class="btn btn-danger">


	</form>
</body>
</html>