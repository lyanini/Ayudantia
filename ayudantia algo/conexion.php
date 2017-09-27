<?php 

$nombre_bd ="ayudantia_log";
$pass = "";
$user = "root";
$host = "localhost";

/* se inicia la conexion para logear a los usuarios */
	$conn = new mysqli($host, $user, $pass, $nombre_bd);
	if($conn->connect_errno){
		echo "error al conectar con la base de datos";
	} 
	
	
 ?>

