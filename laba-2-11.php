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
		$random_N = rand();
		$random_M = rand();
	?>
	<p>Числа между <?php echo $random_N ?> и <?php echo $random_M ?>, которые можно представить как сумму кубов трех чисел</p>
	<?php 
	
		if ($random_M > $random_N) {
			for ($k=1; $k < floor(pow($random_M, 1/3)) ; $k++) { 
					if (pow($k, 3) > $random_M) {
						break;
					}
				 	for ($j=1; $j < floor(pow($random_M, 1/3)); $j++) {
				 		if (pow($j, 3)  > $random_M) {
							break;
						}
				 		for ($d=1; $d < floor(pow($random_M, 1/3)); $d++) { 
				 			if (pow($d, 3) > $random_M) {
								break;
							}
							$sum = pow($k, 3) + pow($j, 3) + pow($d, 3);
					 		if ($sum < $random_M and $sum > $random_N) {
					 			echo $sum , ' ' ;
					 		}
				 		}	
				 	}
		 		}
		} else {
			for ($k=1; $k < floor(pow($random_N, 1/3)) ; $k++) { 
					if (pow($k, 3) > $random_N) {
						break;
					}
				 	for ($j=1; $j < floor(pow($random_N, 1/3)); $j++) {
				 		if (pow($j, 3) > $random_N) {
							break;
						}
				 		for ($d=1; $d < floor(pow($random_N, 1/3)); $d++) { 
				 			if (pow($d, 3) > $random_N) {
								break;
							}
							$sum = pow($k, 3) + pow($j, 3) + pow($d, 3);
					 		if ($sum > $random_M and $sum < $random_N) {
					 			echo $sum , ' ' ;  ;
					 		}
				 		}	
				 	}
		 		}
		}
	?>
</body>
</html>