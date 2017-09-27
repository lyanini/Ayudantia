<?php 

function crearPDF($rut){

	ob_start();
	include('pdf.php');
	$content = ob_get_clean();

	try {

		require_once('vendor/html2pdf-4.4.0/html2pdf.class.php');
		$html2pdf = new HTML2PDF('P','LETTER','es',true,'UTF-8');
		$html2pdf->pdf->SetDisplayMode('fullpage');

		$html2pdf->pdf->SetTitle('PDF Ayudantia');

		$html2pdf->writeHTML($content);
		ob_end_clean();

		$html2pdf->Output($rut.'.pdf', 'D');
		
	} catch (HTML2PDF_exception $e) {
		echo $e;
		exit;

		
	}




}

crearPDF('jamon');
 ?>