<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>ejercicio 02</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php 
	$luis=array("luis vicente","11111111","trabajo");
	$angelica=array("angelica rodiguez","12345678","amiga");
	$perez=array("jose perez","23456435","oficina");
	$miguel=array("miguel arias","876789876","familia");

	$agenda=array($luis,$angelica,$perez,$miguel);

	echo '<table border="1" width="40%" cellspacing="0">';

	foreach ($agenda as $fila) {
		echo "<tr>";
		foreach ($fila as $celda) {
		 echo "<td> $celda </td>";

		}
		echo "</tr>";
	}
		 
	echo '</table>';


foreach ($variable as $key => $value) {
	
}




	 ?>
</body>
</html>