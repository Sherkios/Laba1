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
	 	const NUM_E = 2.71828;
	?>
	<p>Число e =  <?php
	 	echo NUM_E;
	 ?></p>
	<?php 
		$num_el=NUM_E; 
	?>
	<p><?php 
		echo '$num_el = ', $num_el, ' ', gettype($num_el); 
	?></p>
	<p><?php
		settype($num_el, string); 
		echo '$num_el = ', $num_el, ' ', gettype($num_el); 
	?></p>
	<p><?php
		settype($num_el, int); 
		echo '$num_el = ', $num_el, ' ', gettype($num_el); 
	?></p>
	<p><?php
		settype($num_el, boolean); 
		echo '$num_el = ', $num_el, ' ', gettype($num_el); 
	?></p>
</body>
</html>