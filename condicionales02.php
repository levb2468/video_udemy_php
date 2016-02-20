<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title> Condicionales02</title>
	<link rel="stylesheet" href="">
</head>
<body>
	
<?php 	
/*
$edad = 17;

if ($edad >= 65) {
	echo "Eres de la Tercera Edad : ";	
}elseif ($edad >= 35){
	echo "Eres un Madurito";
}elseif ($edad >=18){
	echo "Eres Mayor de Edad Pasa!!";
}else{
	echo "Eres Menor de Edad Fuera!!";
}

*/

$nota =4;

if ($nota == 10){
	echo "Matricula de Honor";
}elseif ($nota >=7) {
	echo "Notable";
}elseif ($nota >=6) {
	echo "Bien";
}elseif ($nota >=5) {
	echo "Aprobado";
}else{
	echo "Suspendido";
}

 ?>


</body>
</html>