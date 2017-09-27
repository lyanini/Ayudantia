<?php 
	include 'conexion.php';

	$nombre = $_POST['nombre'];
	$apellido=$_POST['apellido'];
	$rut=$_POST['rut'];
	$universidad=$_POST['universidad'];
	$foto="img/".$_FILES['foto']['name'];
	if ($_FILES['foto']['error']>0) {
		echo "error con el archivo ";
		echo $_FILES ['foto']['error'];
	}else{
		
		move_uploaded_file($_FILES['foto']['tmp_name'], $foto);

	}
	$sql_insertar="INSERT INTO  usuarios (nombre, apellido, rut, universidad, foto)
	 VALUES('$nombre','$apellido','$rut','$universidad','$foto')";
	 if ($result=$conn->query($sql_insertar)) {
	 	echo "persona insertada";
	 }else{
	 	echo "quedo la caga";
	 }
 ?>