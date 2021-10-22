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
		$а = "А";
		switch ($а) {
		case 'А' :
		 echo 'Переменная имеет значение "А"'; break;
		case 'В':
		 echo 'Переменная имеет значение "В"'; break;
		default:
		 echo 'Ответ не найден ' ;
		}
	?>
	<br>
	<?php
		$а = "В";
		switch ($а) {
		case 'А' :
		 echo 'Переменная имеет значение "А"'; break;
		case 'В':
		 echo 'Переменная имеет значение "В"'; break;
		default:
		 echo 'Ответ не найден ' ;
		}
	?>
	<br>
	<?php
		$а = "C";
		switch ($а) {
		case 'А' :
		 echo 'Переменная имеет значение "А"'; break;
		case 'В':
		 echo 'Переменная имеет значение "В"'; break;
		default:
		 echo 'Ответ не найден ' ;
		}
	?>
	<br>
	<?php
		$а = "А";
		switch ($а) {
		case 'А' :
		 echo 'Переменная имеет значение "А"'; ;
		case 'В':
		 echo 'Переменная имеет значение "В"'; break;
		default:
		 echo 'Ответ не найден ' ;
		}
	?>
</body>
</html>