<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Ejercicio03 Switch</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php 

		<img src="//d1379drdlkt418.cloudfront.net/images/v5/123rf_white_small_300.png" border="0" width="150" height="30" class="noborder">
</a>

	

	$year = 1994;
	echo "Tu Año de nacimiento es $year y te corresponde en el horoscopo chino:  ";

	switch ($year % 12) {
		case 0:
			echo "Mono";
			break;
		case 1:
			echo "Gallo";	
			break;
		case 2:
			echo "Perro";
			
			break;
		case 3:
			echo "Javali";	
			break;
		case 4:
			echo "Rata";
			break;
		case 5:
			echo "Buey";	
			break;
		case 6:
			echo "Tigre";
			break;
		case 7:
			echo "Conejo";	
			break;
		case 8:
			echo "Dragon";
			break;
		case 9:
			echo "Serpiente";	
			break;
		case 10:
			echo "aballo";
			break;
		case 11:
			echo "Cordero";	
			break;
		default:
			echo "no existe este signo del horoscopo chino";
			break;
	}


	 ?>
</body>
</html>