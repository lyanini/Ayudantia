<?php

if (isset($_REQUEST[alumno_formulario])) {
	
	$nombre = $_REQUEST['nombre'];
	$apellido = $_REQUEST['nombre'];
	$rut = $_REQUEST['nombre'];
}

if (isset($_REQUEST[ramo_formulario])) {
	
	$ramo = $_REQUEST['nombre'];
	$nota = $_REQUEST['nombre'];

}

/*
$nombre = $_POST['Nombre'];
$apellido = $_POST ['Apellido'];
$rut = $_POST['Rut'];
$ramo = $_POST['Ramo'];
$nota = $_POST['Nota']

$file = "Datos".".txt";
$conteniod = "$nombre"." $apellido"." $rut"." $universidad"." ";
$fp = fopen($file(filename), "a");
fputs($fp, "$contenido") ;
fclose($fp);
*/
?>