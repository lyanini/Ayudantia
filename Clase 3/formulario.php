<!DOCTYPE html>
<html lang="es">
<head>

	<meta charset="UTF-8">
	<title>Tarea 1</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/bootstrap-theme.css">
	
</head>
<body>

	<div class="container">
		<div class="row">
			<div clas="col-md-3"></div>

			<div class="col-md-6">
				<h1>Alumno:</h1>
				<form action="archivos.php" method="POST" enctype="multipart/from-data">
					
					<input type="text" name="Nombre" class="form-control" placeholder="Nombre">	
					<input type="text" name="Apellido" class="form-control" placeholder="Apellido">
					<input type="text" name="Rut" class="form-control" placeholder="Rut" maxlength="8">
					<input type="text" name="Ramo" class="form-control" placeholder="Ramo">
					<input type="text" name="Nota" class="form-control" placeholder="Nota">

					<input type="submit" value="Enviar" class="btn btn-success btn-block">
					
				</form>
	
			</div>

			<div class="col-md-3"></div>
		</div>
	</div>

<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>