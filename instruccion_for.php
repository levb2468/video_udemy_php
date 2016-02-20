<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Instruccion FOR</title>
	<link rel="stylesheet" href="">
</head>
<body>

	<table style="width:100%">
<?php 	

/*
	for ($tabla = 1; $tabla <= 10  ; $tabla++) { 
		echo "<p>vamos a ver la tabla de multiplicar del $tabla</p>";

		for ($i=1; $i <= 10; $i++) { 
			echo "$i por $tabla es igual a ".$i*$tabla."<br/>";
		}
	}
	*/

for ($i=0; $i <=10 ; $i++) { 

	if ($i % 2==0) {
		echo '<tr style="background-color:#CCC"><td>Esto es un fila de mi tabla pares</td></tr>';

	}else{
		echo '<tr style="background-color:#FF0000"><td>Esto es un fila de mi tabla impares</td></tr>';

	}
}

?>
</table>

</body>
</html>