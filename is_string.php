<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>IS_STRING</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php 
	$cadena = array(
			false,
			'casa',
			4,
			5.6,
			'4',
			'5.7'
		);

	foreach ($cadena as $a) {
		if (is_string($a)) {
			echo "$a es una cadena<br/>";
		}
		else{
			echo "$a no es una cadena<br/>";
		}
	}

		
	 ?>
</body>
</html>