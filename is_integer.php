<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>IS_INTEGER</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php 

	  $a=5;

	  if (!is_integer($a)) {
	  	echo "$a  no es un numero entero";

	  }
	  	else{
	  		echo "$a si es numero entero";
	  	}

	  		echo "<hr/>";

	  		$b = array(3,5,8,4.6,2.3,5,7,3.2);

	  		foreach ($b as $num) {
	  			if (is_int($num)) {
	  				echo "$num  es un numero entero<br/>";
	  			}
	  			else{
	  				echo "$num no es numero entero <br/>";
	  			}
	  		}
	 ?>
</body>
</html>