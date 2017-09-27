<?php 



if (getenv("HTTP_CLIENT_IP") && strcasecmp(getenv("HTTP_CLIENT_IP"),"unknown"))
           $ip = getenv("HTTP_CLIENT_IP");
   else if (getenv("HTTP_X_FORWARDED_FOR") && strcasecmp(getenv("HTTP_X_FORWARDED_FOR"), "unknown"))
           $ip = getenv("HTTP_X_FORWARDED_FOR");
   else if (getenv("REMOTE_ADDR") && strcasecmp(getenv("REMOTE_ADDR"), "unknown"))
           $ip = getenv("REMOTE_ADDR");
   else if (isset($_SERVER['REMOTE_ADDR']) && $_SERVER['REMOTE_ADDR'] && strcasecmp($_SERVER['REMOTE_ADDR'], "unknown"))
           $ip = $_SERVER['REMOTE_ADDR'];

	echo $ip;
/*
if( $resultado = $mysqli->query($sql)){

	while ($row = $resultado->fetch_array()) {
		
		
		$fecha = date('d-m-y');
		
		$handle = fopen("$fecha".".txt", "a+");
		
		$texto = 	$row['id']."|".
					$row['nombre']."|". 
					$row['rut']."|". 
					$row['tipo_usuario']."|".
					$ip	;
		
		fwrite($handle, $texto.PHP_EOL);
		fclose($handle);

	}
	
}
*/
 ?>}
