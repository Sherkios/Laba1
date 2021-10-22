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
	<table>
		<?php
			for ($i=1; $i<=10; $i++) { // запускаем первый цикл
			 echo ("<tr>"); // начало строки таблицы
			 for ($k=1; $k<=10; $k++) { // запускаем второй цикл
				 echo ("<td align=center> "); // открываем ячейку таблицы
				 $p=$i*$k; // находим произведение двух чисел и...
				 echo ($p); // выводим его,
				 echo ("</td>"); // а потом закрываем ячейку
			 }
			 echo ("</tr>"); // конец строки таблицы
			}
		?>
	</table>
</body>
</html>