<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>ISSET</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php 

	$a=false;
	if (isset($a)) {
		echo "el valor Existe y es : $a";
	}
	else{
		echo "el valor ingresado nunca fue definida";
	}
	echo "<hr/>";


	if (isset($_POST["enviar"])) {
		echo "Formulario enviado!!";
	}
	else{
		echo '<form action="formulario.php" method="post">';
		echo 'dime tu nombre:<input type="text" name="nombre">';
		echo '<input type="submit" name="enviar" value="Ya!">';
		echo '</form>';
	}

	 ?>
</body>
</html>