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
		 $var1= '3';
		 $var2 = 5;
		 echo $var1 . ' - ' . gettype($var1) . '<br>';
		 print ($var2 . ' - ' . gettype($var2) . '<br>');
		 $var3= 'abc';
		 var_dump ($var3); 
		 echo '<br>';
		 $var4=123;
		 var_dump ($var4);
	?>
</body>
</html>