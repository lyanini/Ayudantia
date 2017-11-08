<?php session_start();


if (isset($_SESSION['usuario'])) {
	header('Location: index.php');
}
// si el metodo de envio es POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$usuario = filter_var(strtolower($_POST['usuario']), FILTER_SANITIZE_STRING);
	$password = $_POST['password'];
	$password2 = $_POST['password2'];

	//comprobar recepcion del fromulario 
	//echo "$usuario"."-"." $password"."-"."$password2";

	$errores = '';
	
	if (empty($usuario) or empty($password) or empty($password2)) {
		$errores .= '<li>Por favor rellenar campos correctamente</li>';		
	}else{
		try{
			$conexion= new PDO('mysql:host=localhost;dbname=logingenerico','root','');
		}
		catch (PDOException $y){
			echo "Error: ".$y->getMessage();
		}

		$statement = $conexion->prepare('SELECT * FROM usuarios WHERE usuario = :usuario LIMIT 1');
		$statement->execute(array(':usuario' => $usuario)); 
		$resultado = $statement->fetch();

		if ($resultado != FALSE) {
		 	$echo
		 } 
	}
}

	
require 'views/registro.view.php';

?>