<?php 

$usuario = "root";
$clave ="";
$db_nombre ="ayudantia_multimedia";
$host ="localhost";

//mysql() ya no se est usando
//mysqli() no tan recomendado
// aprender pdo

$conn = new PDO("mysql:host=$host;dbname=$db_nombre", $usuario, $clave);

// cerrar conexion $conn = null;


 ?>