<?php 

//include
//require

//include_once
require_once "conexion.php";

$smt = $conn->prepare("SELECT* FROM alumnos");
$smt-> execute();

// $resultado = $smt-> setFetchMode(PDO::FETCH_ASSOC);
$resultado = $smt->fetchAll();

//<pre> ordena
// print_r() imprime arreglos
echo "<pre>";
print_r($resultado);
echo "</pre>"; 


 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Document</title>
 </head>
 <body>
 	<table>
 		<tr>
 			<td>ID</td>
 			<td>Alumno</td>
 			<td>Nota</td>
 		</tr>
 		<?php foreach($resultado as $key => $value): ?>
		<tr>
			<td><?php echo $value['id']; ?> </td>
			<td><?php echo $value['nombre']; ?> </td>
			<td><?php echo $value['nota']; ?> </td>
		</tr>
		<?php endforeach ?>
 	</table>
 </body>
 </html>