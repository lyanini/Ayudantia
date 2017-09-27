

<style type="text/css">
	.color{
		color: #ffff00;
	}
	
</style>

<page>
	<h1>Mi primer asdasddsa</h1>
</page>

<page backtop="20mm" backbottom="10mm" backleft="10mm" backright="10mm">

	<page_header>
		<p>Encabezado</p>
	</page_header>

	<page_footer>
		<p>Pie de pagina</p>
	</page_footer>

	<h1>Segund</h1>
	


	<p>
		<span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi deleniti fugiat, commodi eum, repellat, dolorum numquam impedit voluptatem qui, amet illum officiis! Reiciendis mollitia nesciunt aperiam, esse tempora vel assumenda?</span>
		<span>Odit obcaecati ratione quidem iure sapiente, omnis delectus. Saepe suscipit, a aperiam maiores nostrum libero iste temporibus. Fugiat a quibusdam necessitatibus, obcaecati possimus quae quas voluptas. Pariatur architecto exercitationem saepe.</span>
		<span>Repellendus neque, dicta accusantium ipsum cupiditate, similique aut dolorum voluptatum totam provident deleniti sed. Nobis repudiandae, aliquam tempore quod, sed laudantium repellendus quae quo deserunt animi fugit aperiam aut sequi.</span>
		<span>Odio dolorum ex minima, fuga voluptas perspiciatis, animi assumenda quaerat distinctio esse qui reprehenderit vel officiis, eaque magni, eius officia iure ipsa sit sapiente non! Ducimus dolorum libero, sint eum.</span>
		<span>Consequatur earum inventore placeat, sed ut cupiditate porro maiores a magni vero corporis praesentium quos fuga voluptatem ratione. Delectus eligendi modi voluptatum, accusantium, fugit quidem quisquam sint aliquam ut est.</span>
	</p>



<?php 

	for ($i=0; $i < 10; $i++) { 
	echo "<p class='color'><h2>Nueva linea".$i."</h2></p>";
	}

	$a = 1;
	$arreglo = ['manzana','pera'];

 ?>

 <?php if ($a > 5): ?>
 	<h1 style="color: red">a es mayor que 5</h1>
 <?php else: ?>
 	<h1 style="color: blue">a es no es mayor que 5</h1>
 <?php endif ?>


 <?php foreach ($arreglo as $key => $value): ?>
 	<p>mi fruta es: <?php echo $value; ?></p>
 <?php endforeach?>

</page>

