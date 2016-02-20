<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Sentencia SWITCH</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php 	

	$quiniela = '2';

	switch ($quiniela) {
		case '1':
			echo "Gano el Equipo de Casa";
			break;
		case 'x' :
			echo "Empato el Equipo de Casa";
			break;
		case '2' :
			echo "Gano el Equipo Visitante";
			break;
		default:
			echo "no existe esta consulta";
			break;
	}






	 ?>
</body>
</html>