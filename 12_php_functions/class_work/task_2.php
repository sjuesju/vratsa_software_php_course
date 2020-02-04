<!DOCTYPE html>
<html>
<head>
	<title>PHP 12 - Задача 2</title>
</head>
<body>
	<?php
		function swap_numbers($number_start, $number_end){
			if ($number_start > $number_end){
				# num start = 25
				# num end = 5;

				$temp = $number_start; # 25
				$number_start = $number_end; # 5
				$number_end = $temp; #25
			}
			return $number_start . ' ' . $number_end;
		}
		function print_numbers($number_start, $number_end, $tag, $interval){
			$string_numbers = explode(' ', swap_numbers($number_start, $number_end));
			var_dump($string_numbers);	
			for ($i=$string_numbers[1]; $i >= $string_numbers[0]; $i -= $interval) { 
				echo '<' . $tag . '>' . $i .  '</' . $tag . '>';
			}
		}

		print_numbers(42, 11, 'h5', 5);
		print_numbers(52, 25, 'h5', 2);
		print_numbers(10, 100, 'h5', 1);

	?>
</body>
</html>