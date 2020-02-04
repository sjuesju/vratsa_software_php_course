<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		echo 'Task 1' . '<br>';
		$a = rand(1, 1000);
		$b = rand(1, 1000);

		echo $a . ', ' . $b; 
		echo '<br>';
		if ($a > $b){ // :) лесният отговор беше просто да печатам първо $b и след това $a :)
			$c = $a;
			$a = $b;
			$b = $c; 
		}
		echo $a . ', ' . $b;
	echo '<p>';
	echo 'Task 2';
	echo '<br>';
		$number = rand(1, 1000);
		echo $number;
		if ($number % 2 == 0){
			echo ' is even number'; 
		} else {
			echo ' is odd number';
		}
	echo '<p>';
	echo 'Task 3';
	echo '<br>';
		$a = rand(0, 1000);
		$b = rand(0, 1000);
		$c = $a * $b;
		echo $a . ', ' . $b;
	echo '<br>';
		if ($c == 0){
			echo $c . ' is zero';
		} else if ($c % 2 == 0){
			echo $c . ' is even number';
		} else {
			echo $c . ' is odd number';
		}
	echo '<p>';
	echo 'Task 4';
	echo '<br>';
		$a = rand(-1000, 1000);
		$b = rand(-1000, 1000);
		$c = $a + $b;
		echo $a . ', ' . $b;
	echo '<br>';
		if ($c == 0){
			echo $c . ' is zero';
		} else if ($c > 0){
			echo $c . ' is greater than zero';
		} else {
			echo $c . ' is less than zero';
		}
	echo '<p>';
	echo 'Task 5';
	echo '<br>';
		$a = rand(0, 180);
		$b = rand(0, 180);
		$c = rand(0, 180);
		$sum_angles = $a + $b + $c;
		echo $a . ', ' . $b . ', ' . $c . ' = ' . $sum_angles; 
	echo '<br>';
		if ($a == 0 || $b == 0 || $c == 0){
			echo "nope";
		} else if ($sum_angles == 180){
			echo 'yes';
		} else {
			echo "nope";
		}
	echo '<p>';
	echo 'Task 6';
	echo '<br>';	
		$a = rand(0, 180);
		$b = rand(0, 180);
		$c = rand(0, 180);
		echo $a . ', ' . $b . ', ' . $c; 
	echo '<br>';
		if ($a + $b > $c && $c + $b > $a && $a + $c > $b){
			echo 'Yes';
		} else {
			echo 'No';
		}
	echo '<p>';
	echo 'Task 7';
	echo '<br>';
		$a = rand(-30, 110);
		echo $a . '<br>';
		if ($a < 0){
			echo 'Not a valid age';
		} else if ($a < 4){
			echo 'Go to nursery';
		} else if ($a < 7){
			echo 'Go to kindergarder';
		} else if ($a < 19){
			echo 'Go to school';
		} else if ($a < 66){
			echo 'Go to work';
		} else {
			echo 'You are retired';
		}
	echo '<p>';
	echo 'Task 8';
	echo '<br>';
		$a = rand(0, 180);
		$b = rand(0, 180);
		$c = rand(0, 180);
		echo $a . ', ' . $b . ', ' . $c;
		echo '<br>';

		if ($a <= $b && $a <= $c){
			echo $a . ', ';
			if ($b <= $c){
				echo $b . ', ' . $c;
			} else {
				echo $c . ', ' . $b;
			}
		} else if ($b <= $a && $b <= $c){
			echo $b . ', ';
			if ($a <= $c){
				echo $a . ', ' . $c;
			} else {
				echo $c . ', ' . $a;
			}
		} else {
			echo $c . ', ';
			if ($a <= $b){
				echo $a . ', ' . $b;
			} else {
				echo $b . ', ' . $a;
			}
		}

		echo '<p>';
		echo 'Task 9';
		echo '<br>';
		$a = rand(0, 180);
		echo $a;
		echo '<br>';
		if (($a % 3 != 0 && $a % 5 != 0 && $a % 7 != 0) || $a == 0){
			echo 'Not a valid entry';
		} else {
			if ($a % 3 == 0){
				echo '3 ';
			} 
			if ($a % 5 == 0){
				echo '5 ';
			}
			if ($a % 7 == 0){
				echo '7 ';
			}
		}
		echo '<p>';
		echo 'Task 10';
		echo '<br>';
		$a = rand(0, 180);
		$b = rand(0, 180);
		$c = rand(0, 180);
		echo $a . ', ' . $b . ', ' . $c; 
		echo '<br>';
		if ($a + $b > $c && $c + $b > $a && $a + $c > $b){
			if ($a == $b && $a == $c){
				echo 'Равностранен триъгълник';
			} else if ($a == $b || $a == $c){
				echo 'Равнобедрен триъгълник';
			} else {
				echo 'Разностранен триъгълник';
			}
		} else {
			echo 'Невалидни страни';
		}

		echo '<p>';
		echo 'Task 11';
		echo '<br>';
		$a = 100;
		$b = 'заседнал';
		echo $a . ' - ' . $b;
		echo '<br>';
		if ($b == 'заседнал'){
			echo $a * 13 * 10;
		} elseif ($b == 'активен'){
			echo $a * 15 * 10;
		} else {
			echo 'невалиден начин на живот';
		}

		echo '<p>';
		echo 'Task 12';
		echo '<br>';
		$a = 302;
		echo $a;
		echo '<br>';
		if ($a < 51) {
			echo ($a * 0.1) * 1.2;
		} elseif ($a < 151){
			$b = $a - 50;
			echo ((50 * 0.1) + ($b * 0.15)) * 1.2;
		} elseif ($a < 251){
			$b = $a - 150;
			echo ((50 * 0.1) + (100 * 0.15) + ($b * 0.25)) * 1.2;
		} else {
			$b = $a - 250;
			echo ((50 * 0.1) + (100 * 0.15) + (100 * 0.25) + ($b * 0.35)) * 1.2;
		}
		echo '<p>';
		echo 'Task 13';
		echo '<br>';
		echo '??????????????????';
		echo '<p>';
		echo 'Task 18';
		echo '<br>';
		$a = 2;
		$x = -2;
		$y = 0;
		echo '??????????????????????';
		echo '<p>';
		echo 'Task 19';
		echo '<p>';
		echo 'Task: 20';
		echo '<br>';
		$a = rand(0, 2200);
		echo $a;
		echo '<br>';
		if ($a % 4 == 0){
			if ($a % 400 == 0){
				echo 'Leap year';
			} elseif ($a % 100 == 0){
				echo 'Not a leap year';
			} else {
				echo 'Leap year';
			}

		} else {
			echo 'Not a leap year';
		}
		echo '<p>';
		echo 'Task: 23';
		echo '<p>';
		$a = 'es';
		switch ($a) {
			case 'es':
				echo 'Hola, mundo!';
				break;
			case 'en':
				echo 'Hello, world!';
				break;
			case 'de':
				echo 'Hallo, welt!';
				break;
			case 'fr':
				echo 'Bonjour tout le monde!';
				break;
			default:
				echo 'Unkown language';
				break;
		}
		echo '<p>';
		echo 'Task: 24';
		echo '<p>';
		$a = 'Saturday';
		echo $a . ' - ';
		switch ($a) {
			case 'Monday':
			case 'Tuesday':
			case 'Wednesday':
			case 'Thursday':
			case 'Friday':
				echo 'Working day';
				break;
			case 'Saturday':
			case 'Sunday':
				echo 'Not a working day';
				break;
			default:
				echo 'Unknown day';
				break;
		}
		echo '<p>';
		echo 'Task 25';
		echo '<p>';
		$a = 'w';
		echo $a . ' - ';
		if (is_string($a) && strlen($a) == 1){
			switch ($a) {
				case 'a':
				case 'e':
				case 'i':
				case 'o':
				case 'u':
				case 'y':
					echo 'vocal';
					break;				
				default:
					echo 'consonant';
					break;
			}

		} else {
			echo $a . ' is not a letter';
		}
	?>	
</body>
</html>