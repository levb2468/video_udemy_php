<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Ejercicio02 Swithc</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php 

	$edad = 14;

	switch ($edad) {
		case ($edad < 18):
			echo " Menor de Edad";
			break;
		case ($edad>=18) and ($edad <=35):
			echo "Eres mayor de edad, Bienvenido !";
			break;
		case ($edad > 35) && ($edad <65) :
			echo "Eres un Madurito";
			break;
		
		default:
			echo " Eres de la Tercera Edad";
			break;
	}





	 ?>
</body>
</html>