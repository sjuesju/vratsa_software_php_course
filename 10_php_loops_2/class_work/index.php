<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		echo 'Задача 1';
		echo '<br>';
		$num = 1;
		while ($num <= 10) {
			echo $num . " ";
			$num++;
		}
		echo '<p>';
		for ($i=10; $i > 0 ; $i--) { 
			echo $i . " ";
		}
		echo '<p>';
		echo 'Задача 2';
		echo '<br>';
		for ($i=20; $i <= 40; $i++) { 
			if ($i % 2 == 0){
				echo $i . ' ';
			}
		}
		echo '<p>';
		echo 'Задача 3';
		echo '<br>';
		?>
		<form method="post">
		Начално число: <input type="number" name="num_first_third"> Крайно число <input type="number" name="num_second_third"> <input type="submit" name="submit_third" value="Давай">	
		</form>
		<?php
		if (isset($_POST['submit_third'])){
			for ($i=$_POST['num_first_third']; $i <= $_POST['num_second_third']; $i++) { 
				if($i % 3 == 0 && $i % 7 == 0){
					echo $i . ' ';
				}
			}
		}
		echo '<p>';
		echo 'Задача 4';
		echo '<br>';
		for ($i=1; $i <= 20 ; $i++) { 
			if ($i % 2 == 0){
				echo 'Числото ' . $i . ' е четно' . '<br>';
			} else {
				echo 'Числото ' . $i . ' е нечетно' . '<br>';
			}
		}
		echo '<p>';
		echo 'Задача 5';
		echo '<br>';
		?>
		<form method="post">
		Начално число: <input type="number" name="num_first_fifth"> Крайно число <input type="number" name="num_second_fifth"> <input type="submit" name="submit_fifth" value="Давай">	
		</form>
		<?php
		$array_fifth = array();
		if (isset($_POST['submit_fifth'])){
			for ($i=0; $i < 10; $i++) { 
				array_push($array_fifth, rand($_POST['num_first_fifth'], $_POST['num_second_fifth']));				
			}
			var_dump($array_fifth);
		}
		echo '<p>';
		echo 'Задача 6';
		echo '<br>';
		$array_sixth = array();
		for ($i=0; $i < 90; $i++) { 
			array_push($array_sixth, rand(-40, 40));
		}
		sort($array_sixth);
		$start_echo = true;
		$count = sizeof($array_sixth);
		echo 'Минимални температури: ';
		for ($i=0; $i < $count; $i++) { 
			if($start_echo == true){
				echo $array_sixth[$i] . ' '; 
			}
			if ($i == 5){
				$start_echo = false;
			}
			if ($i > $count - 7 && $start_echo === false){
				echo '; Максимални температури: ';
				$start_echo = true;
			}
		}
		echo '<p>';
		echo 'Задача 7';
		echo '<br>';
		$array_seventh = [];
		for ($i=0; $i < 20; $i++) { 
			array_push($array_seventh, $i * 5);
		}
		var_dump($array_seventh);
		echo '<p>';
		echo 'Задача 8';
		echo '<br>';
		$array_eight = [];
		for ($i=0; $i < 100; $i++) { 
			array_push($array_eight, rand(0, 1000));
		}
		sort($array_eight);
		for ($i=0; $i < sizeof($array_eight); $i++) { 
			if($array_eight[$i] != 0){
				echo $array_eight[$i];
				break;
			}
		}
		echo '<p>';
		echo 'Задача 9';
		echo '<br>';
		rsort($array_eight);
		echo $array_eight[0];
		echo '<p>';
		echo 'Задача 10';
		echo '<br>';
		$array_tenth = array('one', 'two', 'three', 'four', 'fife', 'six', 'seven', 'eight', 'nine', 'ten');
		for ($i=0; $i < sizeof($array_tenth); $i++) { 
			$array_tenth[$i] = strtoupper($array_tenth[$i]);
		}
		var_dump($array_tenth);
		echo '<br>';
		for ($i=0; $i < sizeof($array_tenth); $i++) { 
			$array_tenth[$i] = strtolower($array_tenth[$i]);
		}
		var_dump($array_tenth);
		echo '<p>';
		echo 'Задача 11';
		echo '<br>';
		?>
		<form method="post">
		Задай число за проверка дали е просто или не: <input type="number" name="num_elevent">  <input type="submit" name="submit_eleventh" value="Давай">	
		</form>
		<?php
		if (isset($_POST['submit_eleventh'])){
			$is_simple = true;
			if ($_POST['num_elevent'] > 0){
				for ($i=2; $i < $_POST['num_elevent'] / 2; $i++) { 
					if ($_POST['num_elevent'] % $i == 0){
						$is_simple = false;
					}
				}
				if ($is_simple == true){
					echo $_POST['num_elevent'] . ' is a simple number!';
				} else {
					echo $_POST['num_elevent'] . ' is not a simple number';
				}
			} else {
				echo 'Въведете коректно число';
			}			
		}
		echo '<p>';
		echo 'Задача 12';
		echo '<br>';
		?>
		<form method="post">
		Задай степен на число на Фибоначи: <input type="number" name="num_twelve">  <input type="submit" name="submit_twelve" value="Давай">
		</form>
		<?php
		if (isset($_POST['submit_twelve'])){
			if ($_POST['num_twelve'] > 0){
				$num_one = 1;
				$num_two = 0;
				$result_thirteen = '';
				for ($i=1; $i <= $_POST['num_twelve']; $i++) { 
					# 1, 1, 2, 3, 5, 8, 13, 21, 34, 55, 89
					if ($i > 3){
						$num_temp = $num_one + $num_two;
						$num_one = $num_two;
						$num_two = $num_temp;
					} elseif ($i == 3){
						$num_two = 1;
					}
					$result_thirteen .= $i . ': ' . ($num_one + $num_two) . '<br>';
				}
				echo $_POST['num_twelve'] . ": " . ($num_one + $num_two);
			} else {
				echo 'Въведете коректно число';
			}
		}
		echo '<p>';
		echo 'Задача 13';
		echo '<br>';
		if(isset($_POST['submit_twelve'])){
			echo $result_thirteen;
		} else {
			echo 'Въведете число на Фибоначи';
		}		
		echo '<p>';
		echo 'Задача 14';
		echo '<br>';
		$min_length = strlen($array_tenth[0]);
		$min_lenght_word = $array_tenth[0];
		$max_length = strlen($array_tenth[0]);
		$max_length_word = $array_tenth[0];
		for ($i=1; $i < sizeof($array_tenth); $i++) { 
			if (strlen($array_tenth[$i]) < $min_length){
				$min_length = strlen($array_tenth[$i]);
				$min_lenght_word = $array_tenth[$i];
			} elseif(strlen($array_tenth[$i]) == $min_length){
				$min_lenght_word .= '; ' . $array_tenth[$i];
			}

			if (strlen($array_tenth[$i]) > $max_length){
				$max_length = strlen($array_tenth[$i]);
				$max_length_word = $array_tenth[$i];
			} elseif(strlen($array_tenth[$i]) == $max_length){
				$max_length_word .= '; ' . $array_tenth[$i];
			}
		}

		if(strpos($min_lenght_word, ';') !== false){
			echo 'The minimum lenght is ' . $min_length . ' with the words ' . $min_lenght_word . '.';
		} else {
			echo 'The minimum lenght is ' . $min_length . ' with the word ' . $min_lenght_word . '.';
		}
		echo '<br>';
		if(strpos($max_length_word, ';') !== false){
			echo 'The maximum lenght is ' . $max_length . ' with the words ' . $max_length_word . '.';
		} else {
			echo 'The maximum lenght is ' . $max_length . ' with the word ' . $max_length_word . '.';
		}
		echo '<p>';
		echo 'Задача 15';
		echo '<br>';
		$array_fiftheen = [];
		for ($i=0; $i < 100; $i++) { 
			array_push($array_fiftheen, rand(0, 100));
		}
		$count = sizeof($array_fiftheen);
		$num_of_growing = 1;
		$num_of_growing_final = 1;
		$growing_numbers = $array_fiftheen[0];
		$growing_numbers_final = $array_fiftheen[0];
		for ($i=1; $i < $count; $i++) { 
			if ($array_fiftheen[$i - 1] > $array_fiftheen[$i]){
				$num_of_growing++;
				$growing_numbers = $array_fiftheen[$i] . '; ' . $growing_numbers;
			} else {
				if ($num_of_growing_final < $num_of_growing){
					$num_of_growing_final = $num_of_growing;
					$growing_numbers_final = $growing_numbers;
				} elseif ($num_of_growing_final == $num_of_growing){
					$growing_numbers_final .= ' and ' . $growing_numbers;
				}
				$num_of_growing = 1;
				$growing_numbers = $array_fiftheen[$i];
			}
		}
		if(strpos($growing_numbers_final, 'and') !== false){
			echo 'Най-дългите нарастващи серии са от ' . $num_of_growing_final . ' елемента и са ' . $growing_numbers_final;
		} else {
			echo 'Най-дългата нарастваща серия е от ' . $num_of_growing_final . ' елемента и е ' . $growing_numbers_final;
		}		
		echo '<p>';
		echo 'Задача 16';
		echo '<br>';
		$array_sixteen = [];
		for ($i=0; $i < $count; $i++){ 
			if(array_key_exists($array_fiftheen[$i], $array_sixteen)){
				$array_sixteen[$array_fiftheen[$i]]++;
			} else {
				$array_sixteen[$array_fiftheen[$i]] = 1;
			}
		}
		
		$growing_numbers = '';
		$num_of_growing = 0;
		foreach ($array_sixteen as $key => $value) {
			if($value > $num_of_growing){
				$num_of_growing = $value;
				$growing_numbers = $key;
			} elseif ($value == $num_of_growing){
				$growing_numbers .= '; ' . $key;
			}
		}
		if(strpos($growing_numbers, ';') !== false){
			echo 'Най-често повтаряните числа са ' . $growing_numbers . ', като се повтарят ' . $num_of_growing . ' пъти.';
		} else {
			echo 'Най-често повтарящото се число е ' . $growing_numbers . ', като се повтаря ' . $num_of_growing . ' пъти.';
		}
		echo '<p>';
		echo 'Задача 17';
		echo '<br>';
		for ($i=1; $i <= 300; $i++) { 
			for ($j=0; $j < 10; $j++) { 
				echo $i . ' ';
				$i++;
			}
			echo '<br>';
			$i--;
		}
		echo '<p>';
		echo 'Задача 18';
		echo '<br>';
		echo '<table border=1>';
		for ($row=0; $row < 10; $row++) { 
			echo '<tr>' ;
			for ($col=0; $col < 10 ; $col++) { 
				echo '<td>' . $row . ', ' . $col . '</td>';
			}
			echo '</tr>';
		}
		echo '</table>';
		echo '<p>';
		echo 'Задача 19';
		echo '<br>';
		echo '<table border=1>';
		$sum = 0;
		for ($i=0; $i < 20; $i++) { 
			echo '<tr>';
			while (true){
				$number = rand(0, 100);
				if ($number % 2 == 0){
					break;
				}
			}
			
			echo '<td>' . $number . '</td>' . '<td>' . round(sqrt($number), 2) . '</td>';
			echo '</tr>';
			$sum += sqrt($number);
		}
		echo '<tr><td></td><td>' . round($sum, 2) . '</td></tr>';
		echo '</table>';
		echo '<p>';
		echo 'Задача 20';
		echo '<br>';
		echo '<table border=1>';
		for ($row=1; $row <= 10; $row++) { 
			echo '<tr>';
			for ($col=1; $col <= $row; $col++) { 
				if ($col == $row && $row != 10){
					echo '<td>' . $row . ' * ' . $col . ' = ' . ($row * $col) . '</td>';
					echo '<td colspan="'. (10 - $row) .'"></td>';
				} else {
					echo '<td>' . $row . ' * ' . $col . ' = ' . ($row * $col) . '</td>';
				}
				
			}
			echo '</tr>';
		}
		echo '</table>';
		echo '<p>';
		echo 'Задача 21';
		echo '<br>';
		for ($i=0; $i < sizeof($array_fiftheen); $i++) { 
			$is_simple = true;
			for ($num=2; $num < $array_fiftheen[$i] / 2; $num++) { 				
				if ($array_fiftheen[$i] % $num == 0){
						$is_simple = false;
					}
			}
			if ($is_simple == true){
					echo '<span style="color:red">' . $array_fiftheen[$i] . '</span>; ';
				} else {
					echo $array_fiftheen[$i] . '; ';
				}
		}	
		echo '<p>';
		echo 'Задача 22';
		echo '<br>';			
	?>
	<form method="post">
		<textarea name="twenty_two_textarea"></textarea>
	 	<input type="submit" name="submit_twentytwo" value="Изчисли">
	</form>
	<?php
		if(isset($_POST['submit_twentytwo'])){
			$array = explode(',', $_POST['twenty_two_textarea']);
			echo '<table border=1>';
			for ($i=0; $i < sizeof($array); $i++) { 
				$temp = str_split(trim($array[$i]));
				$sum = 0;
				$isNum = true;
				for ($a=0; $a < sizeof($temp); $a++) { 
					if(is_numeric(trim($temp[$a])) == false){
						$isNum = false;
					} else {
						$sum += trim($temp[$a]);
					}
				}
				if ($isNum == true){
					echo '<tr><td>' . $array[$i] . '</td><td>' . $sum . '</td></tr>';
				} else {
					echo '<tr><td>' . $array[$i] . '</td><td>Не мога да сумирам</td></tr>';
				}
				
			}
			echo '</table>';
		}
		echo '<p>';
		echo 'Задача 23';
		echo '<br>';	
	?>
</body>
</html>

