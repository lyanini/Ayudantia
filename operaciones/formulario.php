<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<form action="insertar.php" method="POST">
				Nombre: <input type="text" name="nombre" class="form-control">
				<br>
				Apellido Materno: <input type="text" name="apellido_materno" class="form-control">
				<br>
				Apellido Parterno: <input type="text" name="apellido_paterno" class= "form-control">
				<br>
				Rut:  <input type="number" name="rut" class= "form-control">
				<br>
				Promocion:  <input type="number" name="Promocion" class= "form-control">
				<br>
				Calle:	<input type="text" name="calle" class= "form-control">
				<br>
				Cuidad:<input type="text" name="Cuidad" class= "form-control"> 
				<br>
				<input type="sumbit" value="enviar datos" class="btn btn-danger">
			</form>
		</div>
	</div>
	
	<script src="js/bootstrap.js"></script>
</body>
</html>