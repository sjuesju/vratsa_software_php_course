<!DOCTYPE html>
<html>
<head>
	<title>PHP 12 - Задача 3</title>
</head>
<body>
	<?php
		function print_array($array){
			$sum_even_numbers = 0;
			for ($i=0; $i < count($array); $i++) { 
				echo $array[$i] . ', ';
				if ($i % 2 == 0){
					$sum_even_numbers += $array[$i];
				}
			}
			echo '<p>' . $sum_even_numbers;
		}

		$array = [1, 2, 3, 4, 5, 'text', 6];
		print_array($array);
	?>
</body>
</html>