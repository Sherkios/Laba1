<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<title>Грищенко Игорь</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<p><a href="index.php">Главная</a></p>
	<?php
		$a=rand(1,10);
		$b=rand(10,20);
		print ("<p> Числа из отрезка [".$a.",".$b."]: <br>");
		for ($i=$a; $i<=$b; ++$i) {
		 echo($a . "<br>");
		 $a=++$a; }
	?>
</body>
</html>