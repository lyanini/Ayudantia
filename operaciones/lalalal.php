<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
	<link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
	<div class="container well"> hola
		<div class="row well">hola
				<div class="col-md-6 col-xs-4 well">
					columna uno 
				</div>
			<span class= "btn btn-info" >hola</span>
			<div class="row">
				<div class="col col-md-12">
					
					<?php 
						for ($i=0; $i <5 ; $i++) { 
								echo '<a href="#" class="btn btn-danger">zelda '.$i.'</a>';
								echo "<br> <br>";
							}	
					 ?>
				</div>
			</div>
		</div>
	</div>
	<script src="js/bootstrap.js"></script>
</body>
</html>