<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Datos</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">

</head>
<body>
	<div class="container-fluid">
	<div class="row">
		<div class="col-md-6 well"> 
			<h3>Ramo</h3>
				<form action="procesar.php" method="POST">

					
					Nombe: <input type="text" name="Nombre" class="form-control"><br>
					Primer apellido: <input type="text" name="apPaterno" class="form-control"><br>
					Segundo apellido: <input type="text" name="apMaterno" class="form-control"><br>
					Rut: <input type="text" name="Rut" class="form-control"><br>
					
					<input type="submit"  value="Enviar" class="btn btn-success btn-block">

				</form>
			
			
		</div>
		<div class="col-md-6 well"> 

			<table class="table table-striped">
			<thead>
				<tr>
					<th>ID</th>
					<th>Nombre</th>
					<th>Apellido Paterno</th>
					<th>Apellido Materno</th>
					<th>Rut</th>
				</tr>
			</thead>
			<tbody>
				
					<?php 
						include ("conexion.php");
						$sql = "SELECT id, rut, nombre, ap_paterno, ap_materno FROM bd01";
						$result = $conn->query($sql);

						if ($result->num_rows > 0) {
						   
						    while($row = $result->fetch_assoc()) {
						    	echo "<tr>";
						        echo "<td>" . $row["id"]. "</td>";
						        echo "<td>" . $row["nombre"]. "</td>";
						        echo "<td>" . $row["ap_paterno"]. "</td>";
						        echo "<td>" . $row["ap_materno"]. "</td>";
						        echo "<td>" . $row["rut"]. "</td>";
						        echo "</tr>";

						    }
						} else {
						    echo "0 results";
						}
						$conn->close();
					?>
		
				
			</tbody>	
			</table>
			

		</div>
		
	</div>
</div>

	

	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/jquery.js"></script>
</body>
</html>
