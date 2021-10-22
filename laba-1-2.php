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
	<p> Арифметические операции:
	<p>
	<?php
		 $x=rand(1,10);
		 $y=rand(1,10);
		 print ($x . '+' . $y . '=' . ($x+$y) . '<br>');
		 print ($x . '-' . $y . '=' . ($x-$y) . '<br>');
		 print ($x . '*' . $y . '=' . ($x*$y) . '<br>');
		 print ($x . '/' . $y . '=' . ($x/$y) . '<br>');
	?>
</body>
</html>