<?php 

include 'conexion.php';

$id_usuario = $_REQUEST['id'];

$sql_modificar = "UPDATE usuarios SET universidad='UTFSM' WHERE id='$id_usuario' ";

if ($result = $conn->query($sql_modificar)) {
		echo "Universidad modificada correctamente";
	} else {
		echo "Error al insertar persona";
	}

 ?>