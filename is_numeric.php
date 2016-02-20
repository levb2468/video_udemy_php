<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>IS_NUMERIC</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php 

		$a = 3.9;
		

		if (is_numeric($a)) 
			echo "$a es un numero";
		
		else{
			echo "$a no es un numero";
		}





	 ?>
</body>
</html>