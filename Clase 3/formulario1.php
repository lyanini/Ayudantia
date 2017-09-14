<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="UTF-8">
	<title>jaimeamor</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">

</head>
<body>

<div class="container-fluid">
	<div class="row">
		<div class="col-md-6 well"> 
			<h3>Ramo</h3>
				<form action="procesar.php" method="POST">

					
					Ramo: <input type="text" name="ramo" class="form-control"><br>
					Nota: <input type="text" name="nota" class="form-control">
					<br>
					<input type="hidden" name="alumno_formulario">
					<input type="submit"  value="Enviar" class="btn btn-success btn-block">

				</form>
			
			
		</div>
		<div class="col-md-6 well"> 

			<h3>Alumno</h3>
			<form action="procesar.php" method="POST" e>

				Nombre: <input type="text" name="nombre" class="form-control"><br>
				Apellido: <input type="text" name="apellido" class="form-control"><br>
				Rut: <input type="text" name="rut" maxlength="8" class="form-control">
				<br>
				<input type="hidden" name="ramo_formulario">
				<input type="submit" value="Enviar" class="btn btn-success btn-block">

			</form>
			

		</div>
		
	</div>
</div>

	

	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/jquery.js"></script>
</body>
</html>