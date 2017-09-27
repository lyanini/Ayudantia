<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>fomulario</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/bootstrap-theme.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-3"></div>
			<div class="col-md-6">
				<form action="procesar.php" method="POST" enctype="multipart/form-data">
					<input type="text" name="nombre" class="form-control" placeholder="nombre">
					<input type="text" name="apellido" class="form-control" placeholder="apellido">
					<input type="text" maxlength="8" name="rut" class="form-control" placeholder="rut">
					<input type="text" name="universidad" class="form-control" placeholder="universidad">
					foto:
					<input type="file" name="foto" id="foto" class="form-control">
					<input type="submit" value="crear" class="btn btn-success btn-block">
					
				</form>
			</div>
			
		</div>

	</div>
<script type="js/bootstrap.js"></script>>
</body>
</html>