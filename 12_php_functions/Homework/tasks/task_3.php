<?php
	function check_is_user_input_ok($user_input){
		if (strlen($user_input) > 3 && strpos($user_input, '[') !== false && strpos($user_input, ']') !== false){
			$array = explode('[', $user_input);			
			if (sizeof($array) == 2){
				return true;
			} else {
				return false;
			}
		} else {
			return false;
		}
	}

	function check_is_user_input_numer_ok($number){
		if(strlen($number) > 0){
			return true;
		} else{
			return false;
		}
	}

	function split_user_input($user_unput){
		return(explode(',', $user_unput));		
	}

	function clean_array($array){
		$final_array = [];
		for ($i=0; $i < count($array); $i++) { 
			$final_array[$i] = trim(str_replace(['[', ']'], '', $array[$i]));
		}
		return $final_array;
	}

	function calculate_number_occurancies($array, $number){
		$occurancies = 0;
		foreach ($array as $value) {
			if ($value == $number){
				$occurancies++;
			}
		}
		if($occurancies > 0){
			return $occurancies;
		} else {
			return 'not in array';
		}
	}
?>
<!DOCTYPE html>
<html lang="bg-Bg">
<head>
	<title>Домашно по PHP Functions - Задача 3</title>
	<link rel="stylesheet" type="text/css" href="../styles/style.css">
</head>
<body>
	<div id="container">
		<div id="header_left">
		</div>
		<div id="header_right">
		</div>
		<div id="sidebar_left">
		</div>
		<div id="sidebar_right">
			<h3>
				Домашно по PHP Functions
			</h3>
			<ul>
				<li>
					<a href="../index.php">Задача 1</a>
				</li>
				<li>
					<a href="../tasks/task_2.php">Задача 2</a>				
				</li>
				<li>
					<span id="task_current">Задача 3</span>					
				</li>
			</ul>
		</div>
		<div id="content">
			<div id="content_top">
				<h4>Задача 3</h4>
				Декларирайте функция, която преброява колко пъти дадено число се появява в даден масив. Ако числото не е елемент на масива, функцията трябва да връща съответния отговор. Въведете масива по следния вид [2, 11, 2, 3, 0, 2].
				<form method="post">
					Въведете масива: 
					<input type="text" name="array_num" id="num_repetitions">
					Въведете търсеното число: 
					<input type="number" name="number" id="number">
					<input type="submit" name="submit" value="Давай">
				</form>
			</div>
			<div id="content_bottom">
				<?php
					if (isset($_POST["submit"])){	
						if (check_is_user_input_ok($_POST['array_num']) === true){
							if (check_is_user_input_numer_ok($_POST['number'])){
								echo calculate_number_occurancies(clean_array(split_user_input($_POST['array_num'])), $_POST['number']);	
							} else {
								echo 'Въведете коректни данни';
							}			
						} else {
							echo 'Въведете коректни данни';
						}
					}	
				?>
			</div>
		</div>
	</div>	
</body>
</html>