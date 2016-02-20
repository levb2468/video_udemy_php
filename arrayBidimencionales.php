<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>ArrayBidimencional</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php 

	$liga=array(
		array("A Coruña","Deportivo",15),
		array("Zaragosa","Zaragosa",21),
		array("sevilla","betis",15),
		array("sevilla","sevilla",15),
		array("valencia","valencia",10)
		);

	for ($i=0; $i < 5 ; $i++) { 
		echo $liga[$i][1]." - ".$liga[$i][2]."<br/>";
	}

	echo "<hr/>";

	$libros=array(

		'comic'=>array(
			'titulo'=>'superman',
			'autor'=>'jerry siegel',
			'fecha'=>'1998'
			),
		'sficcion'=>array(
			'titulo'=>'dune',
			'autor'=>'frank herbert',
			'fecha'=>'1965'
			),
			'fantacia'=>array(
				'titulo'=>'el hobit',
				'autor'=>'jrr tolkien',
				'fecha'=>'1988'
				),

			'terror'=>array(

				'titulo'=>'carrie',
				'autor'=>'Stephen King',
				'fecha'=>'1974'
				)

		);

		echo $libros["terror"]["fechae"];
	 ?>

</body>
</html>