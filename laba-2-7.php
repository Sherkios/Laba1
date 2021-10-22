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
		$a=rand(-5,0);
		$b=rand(0,5);
		print ("<p> Числа из отрезка [".$a.",".$b."]: <br>");
		do {
		echo($a . "<br>");
		$a=++$a; }
		while ($a<=$b);
	?>
</body>
</html>