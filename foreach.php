<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>FOREASCH</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php 
	$semanas=array(
		"lunes","martes","miercoles",
		"jueves","viernes","sabado",
		"domingo"
		);

	foreach ($semanas as $dia) {
		echo "$dia, ";


	}

echo "<hr/>";
$capital  = array(
"cantabria"=>"santander",
"euskadi"=>"victoria",
"aragon"=>"zaragoza",
"navarra"=>"pamplona"
	);
foreach ($capital as $clave => $ciudad) {
	echo "$ciudad es la capital de $clave.<br/>";
}

	 ?>
</body>
</html>