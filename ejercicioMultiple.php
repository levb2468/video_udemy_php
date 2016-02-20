<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Ejercicio Multiples</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php 

	$numero =15;
	$par =0;
	$imp =0;


	for ($numero=0; $numero < 15; $numero++) { 
		
		if ($numero %2 == 0) {
			$par++;
			echo "el numero $numero es PAR<br/>";
		}else{
			$imp++;
			echo "el numero $numero es IMPAR<br/>";
		}

	}

	/*

	while ($numero > 0) {
		
		if ($numero %2 ==0) {
			echo "el numero $numero es PAR<br/>";
			$par++;

		}

		else{
			echo "el numero $numero es IMPAR<br/>";
			$imp++;	
		}


		$numero--;

	}
	*/

	echo "<br/>";

	echo "SE AN ENCONTRADO $par NUMEROS PARES y $imp NUMEROS IMPARES";


	 ?>
</body>
</html>