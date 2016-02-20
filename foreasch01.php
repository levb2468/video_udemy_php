<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>ejercicio foreasch</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php 

	$total=0;
	$notas =array(3,6,5,8,4,2,6,3,9,2,8,7);
	$contar=count($notas);

	foreach ($notas as $n) {
		$total=$total+$n;
	}

	$promedio=$total/$contar;

	echo $promedio;

	echo "<hr/>";
	//otro metodo mas sin plificado para sumar numeros en un array
	$contar=count($notas);
	$notas =array(3,6,5,8,4,2,6,3,9,2,8,7,9,5,8);
	$promedio=array_sum($notas)/$contar;
	echo $promedio;
	 ?>
</body>
</html>