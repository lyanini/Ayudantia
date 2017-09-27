<?php 

$nombre = $_REQUEST['nombre'];
$apellido = $_REQUEST['apellido'];
$edad = $_REQUEST['edad'];


$NombreCompleto = $nombre."".$apellido.". Mi edad es ".$edad;

echo $NombreCompleto;

 ?>