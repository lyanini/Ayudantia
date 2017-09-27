
<?php 
$nombre_bd ="carnet";
$pass = "";
$user = "root";
$host = "localhost";

	$conn = new mysqli($host, $user, $pass, $nombre_bd);
	if($conn->connect_errno){
		echo "error al conectar con la base de datos";
	} 
	
	
 ?>

