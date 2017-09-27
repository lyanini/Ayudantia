<?php 

$anchoMaximo = $_POST['ancho_max'];
$anchoMinimo = $_POST['ancho_min'];
$altoMaximo = $_POST['alto_max'];
$altoMinimo = $_POST['alto_min'];
$texto = $_POST['texto'];
$color = $_REQUEST['color'];


$pagina = "

<!DOCTYPE html>
<html>
<head>
	<meta charset='UTF-8'>
	<meta name='viewport' content='width= device-width, initial-scale=1'> 
	<title>Pagina generada</title>
	<style type='text/css'>
		body{
			width: auto;
			height: auto;
			background-color: #f1f1f1;	
		}
		#caja{
			
			max-width: ".$anchoMaximo."%;
			min-width:".$anchoMinimo."%;

			max-height: ".$altoMaximo."%;
			min_height: ".$altoMinimo."%;

			display: block;
		
			background-color: $color;
		}

	</style>
</head>

<body>
	<center>
	<div id='caja'>$texto</div>
	</center>
</body>
</html>
";


$archivo = "pagina.html";
$handle = fopen($archivo, "w+");
fwrite($handle, $pagina);
fclose($handle);


 ?>