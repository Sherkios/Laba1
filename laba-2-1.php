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
		$a=1; $b = false;
		if ($a) { echo '$a='."$a - истина<br>"; }
		 else { echo '$a='."$a - ложь<br>"; }
		if ($b) { echo '$b='."$b - истина<br>"; }
		 else { echo '$b='."$b - ложь<br>"; }
	?>
	<?php
		$a=0; $b = "0";
		if ($a) { echo '$a='."$a - истина<br>"; }
		 else { echo '$a='."$a - ложь<br>"; }
		if ($b) { echo '$b='."$b - истина<br>"; }
		 else { echo '$b='."$b - ложь<br>"; }
	?>
	<?php
		$a=10; $b = "true";
		if ($a) { echo '$a='."$a - истина<br>"; }
		 else { echo '$a='."$a - ложь<br>"; }
		if ($b) { echo '$b='."$b - истина<br>"; }
		 else { echo '$b='."$b - ложь<br>"; }
	?>
	<?php
		$a=false; $b = "false";
		if ($a) { echo '$a='."$a - истина<br>"; }
		 else { echo '$a='."$a - ложь<br>"; }
		if ($b) { echo '$b='."$b - истина<br>"; }
		 else { echo '$b='."$b - ложь<br>"; }
	?>
	<?php
		$a=-1; $b = "";
		if ($a) { echo '$a='."$a - истина<br>"; }
		 else { echo '$a='."$a - ложь<br>"; }
		if ($b) { echo '$b='."$b - истина<br>"; }
		 else { echo '$b='."$b - ложь<br>"; }
	?>
</body>
</html>