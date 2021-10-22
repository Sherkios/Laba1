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
		$dn=rand(1,7);
		print ($dn ." - номер дня недели <br>");
		switch ($dn) {
		case 1: print ("это понедельник"); break;
		case 2: print ("это вторник"); break;
		case 3: print ("это среда"); break;
		case 4: print ("это четверг"); break;
		case 5: print ("это пятница"); break;
		case 6: print ("это суббота"); break;
		case 7: print ("это воскресенье");
		}
	?>
</body>
</html>