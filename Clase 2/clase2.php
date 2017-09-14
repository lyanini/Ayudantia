<?php

$variable = "String";

echo $variable;

//$alumnos = array('' =>,);
$alumnos = ['Cristobal' => 5.2,
			'Diego' => 5.5,
			'Felipe' => 6.]5;

//spaghetti code: mezcla de html con php en el mismo codigo
//incluir lo estrictamente necesario de php dentro de html 	
//ctrl+shif+d
?>




<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1><?php echo $variable; ?></h1>

	<?php

		for ($i=0; $i<=5; $i++){
			echo "<h1>".$variable."</h1>";
		}

	?>


	<table style="border: solid 1px #000000">
		<tr >
			<td>Alumno</td>
			<td>Nota</td>

		</tr>
			<?php foreach ($alumnos as $key => $value): ?>
		<tr>
			<td><?php echo $key; ?></td>
			<td><?php echo $value; ?></td>
		</tr>	
			<?php endforeach ?>
		
	</table>

</body>
</html>