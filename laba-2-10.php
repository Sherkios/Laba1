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
	<table style="margin-left: 20px">
		<?php
			for ($i=1; $i<=10; $i++) { // запускаем первый цикл
			 echo ("<tr>"); // начало строки таблицы
			 for ($k=1; $k<=10; $k++) { // запускаем второй цикл
			 	$p=$k + ( $i - 1 ) * 10;
			 	if ($p % 2 ==0) {
			 		echo ("<td align=center style='border: 1px solid green; color:red;padding:20px;'> "); // открываем ячейку таблицы
				 	echo ($p); // выводим его,
				 	echo ("</td>"); // а потом закрываем ячейку
			 	}else {
			 		echo ("<td align=center style='border: 1px solid green;padding:20px;'> "); // открываем ячейку таблицы
				 	echo ($p); // выводим его,
				 	echo ("</td>"); // а потом закрываем ячейку
			 	}
			 }
			 echo ("</tr>"); // конец строки таблицы
			 	}
		?>
	</table>
</body>
</html>