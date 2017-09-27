<?php 

function crearPDF($rut){

	ob_start();
	include('pdf.php');
	$content = ob_get_clean();

	try {

		require_once('vendor/html2pdf-4.4.0/html2pdf.class.php')
		
	} catch (HTML2PDF_exception $e) {
		
	}




}


 ?>