<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script type="text/javascript" src="jquerry.min.js"></script>
</head>
<body>
	    <form action="#" method="POST" id="ayudantia">
		Nombre: <input type="text" name="nombre"><br>
		Apellido: <input type="text" name="apellido"><br>
		Edad: <input type="number" name="edad"><br>

		<input type="submit" value="enviar">
	</form>
<br>
<br>
<br>
<br>
<div id="resultado"></div>

<script type="text/javascript">

	$("form#ayudantia").submit(function(){

		var formData = new FormData($(this)[0]);

		$.ajax({

			url: "procesar.php",
			type: 'POST',
			data: formData,
			async: false,
			beforeSend: function(){
				alert("Enviando datos");
			},
			succes: function (data){
				alert(json); 
			},
			cache: false,
			contentType: false,
			processData: false
		});

		return false;
	}
</script>

</body>
</html>