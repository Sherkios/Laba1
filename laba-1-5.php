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
		$a = rand(-20,20);
		$b = rand(-20,20);
		$c = rand(-20,20);
		if (($a == 0) or ($c == 0) or ((( $a / 2 ) - 4 * $d - 1) == 0 )) {
			echo "знаменатель равен 0";
		}elseif ((( $a / 2 ) - 4 * $d - 1) == 0) {
			echo "делитель равен 0";
		}else{
			$result = ($c * ( $b + 23 ))/(( $a / 2 ) - 4 * $d - 1);
			echo '(', $c, ' * ( ', $b, ' + 23 ))/(( ', $a, ' / 2 ) - 4 * ', $d, ' - 1)', ' = ', $result ;
		}
	?>
</body>
</html>