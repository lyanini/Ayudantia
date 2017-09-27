<?php 
	$a = $_GET['variablea'];
	$b = $_GET['variableb'];
	$c = $_GET['variablec'];

	
	$l=$b*$b;
	
	$h=-4*$a*$c;

	$v=2*$a;
	$paso=$l+$h;
	$raiz= sqrt($paso);
	$x=$b*-1;
	if($raiz>0){
		echo "su operacion es valida ";	
		$total1=($x+$raiz)/$v;
		$total2=($x-$raiz)/$v;
		echo "total 1 es: ".$total1;
		echo "total 2 es: ".$total2;
	}
	else echo "su formula es invalida";
	
 ?>