<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>STRLEN</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php 

	$cadena = " asd fg 123 es no sen molo";

	if (strlen($cadena)>15) {
		echo "la cadena es demaciado larga y tiene :".strlen($cadena);

	}
	else{
		echo "la cadena tiene la longitud correcta";
	}	


	 ?>
</body>
</html>