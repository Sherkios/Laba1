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
		$var = 5; $i = 0;
		while (++$i <= $var)
		 { echo $i . ' '; }
	?>
	<br>
	<?php
		$var = 5; $i = 0;
		while (++$i <= $var)
		 { echo $var - ($i-1) . ' '; }
	?>
</body>
</html>