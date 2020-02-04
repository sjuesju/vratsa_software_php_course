<!DOCTYPE html>
<html>
<head>
	<title>PHP 12 - Задача 1</title>
</head>
<body>
		<?php 
				function print_text($message, $tag, $color){
					echo '<' . $tag . ' style=\'color:' . $color . '\'>' . $message . '</' . $tag . '>';
				}
				function calc_sum($num_one, $num_two){
					echo $num_one . ' + ' . $num_two . ' = ' . ($num_one + $num_two) . '<p>';
				}


				print_text('Hello world!', 'h1', 'blue');
				print_text('Hello new world!', 'h2', 'red');
				print_text('Bye old world!', 'h3', 'green');

				calc_sum(2, 3);
				calc_sum(100, 23);
				calc_sum(20, 83);


		?>
</body>
</html>