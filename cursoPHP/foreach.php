<?php
$meses = ['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Dicimbre'];
$numeros = [10,2,5,7,4];

#ordenar numeros de menor a mayor
sort($numeros);
#ordenar numeros de mayor a menor
rsort($numeros);

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>ForEach</title>
</head>
<body>
	<h1>Meses del año</h1>
	<ul>
		<?php 
			foreach ($meses as $mes){
				echo "<li>".$mes."</li>";
			}
		?>
	</ul>
	<h1>Numeros</h1>
	<ul>
		<?php
			foreach($numeros as $num){
				echo "<li>".$num."</li>";
			}
		?>
	</ul>
	
</body>
</html>