<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>practica 1</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<h1>primer ejercicio en php</h1>
	<?php 

	$celcius=25;

	$farengeih =1.8*$celcius+32;

	echo "el valor es :".$farengeih; 

	echo "<hr/>";

	$a=false;
	$b=false;

	if (!$a and $b or $a and !$b) {
		echo "solo uno es true";
	}else{
		echo "los dos son true o los dos son false";
	}

	 echo "<hr/>";

	 	$numero=array();
	 	echo "<h2>lon numero primos de 9 y 13</h2>";
	for ($i=0; $i <100 ; $i++) { 
		if ($i%9==0 or $i%13==0) {
			echo $i."-";
			$numero[]=$i;
		}
	}
	echo "<br/>";
	echo "<h3>guardado en el array</h3><br>";
	foreach ($numero as $num) {
		echo $num."-";
	}
	 ?>
</body>
</html>