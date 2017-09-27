<?php 
	$basesdedatos="ayudantiaclase2";
	$usuario="root";
	$contrasena="";
	$host="localhost";

	$conexion=mysqli_connect($host, $usuarios, $contrasena,$basesdedatos);
	if(!$conexion){
		die("conexion errornea ". mysqli_connect_errno());
	}
	$nombre=$_POST['nombre'];
	$apellido=$_POST['apellido'];
	$edad=$_POST['edad'];
	echo $nombre.$apellido.$edad;
	$sql= "INSERT INTO persona  VALUES ('$nombre','$apellido','$edad');";
	if (mysqli_query($sql,$conexion)) {
		echo "datos insertado correctamente";
	}else{
	echo "datos insetados mal ";
	}
 ?>
