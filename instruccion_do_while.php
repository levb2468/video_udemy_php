<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Ejercicio DO_WHILE</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php  

	$i = 11;
/*
	do {
		echo " $i - ";
		$i++;

	} while ( $i <= 100);
	echo "se termino el programa por que es mayor que 100";
	 ?>
	 */
	 echo "ESTO LO QUE PASA CON WHILE...<br/>";

while ($i<=10) {
	echo "ME VES";
	$i++;
}
 echo "ESTO LO QUE PASA DO WHILE...<br/>";

$x=11;
do {
	echo "ME VES";
	$x++;
} while ($x <= 10);
echo "<hr>";

$tabla =5;
$f=1;

while ($f <= 10) {
	echo "$f x $tabla =".$f*$tabla."<br/>";
	$f++;
}

echo "<hr/>";

$d=1;

do {
	echo "$d x $tabla =".$d*$tabla."<br/>";
	$d++;
} while ($d<= 10);

?>
</body>
</html>