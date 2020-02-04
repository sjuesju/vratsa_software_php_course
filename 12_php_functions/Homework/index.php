<?php
	function check_is_user_input_ok($user_input){
		if (strlen($user_input) > 3 && strpos($user_input, '[') !== false && strpos($user_input, ']') !== false){
			return true;
			
		} else {
			return false;
		}
	}
	function split_user_input($user_unput){
		$final_array = [];
		$index = 0;
		$array = explode('],', $user_unput);
		foreach ($array as $value) {
			$temp = trim(str_replace(['[', ']', '‘', '’'], '', $value));
			$temp_array = explode(', ', $temp);
			for ($i=0; $i < sizeof($temp_array); $i++) { 
				$final_array[$index][$i] = $temp_array[$i];
			}
			$index++;
		}
		return $final_array;
	}
	function print_array($array){
		for ($i=0; $i < sizeof($array); $i++) { 
			echo '<div>';
			for ($num=0; $num < sizeof($array[$i]); $num++) { 
				echo '<span class="task_one_margin_left">a[' . $i . '][' . $num . '] = ' . $array[$i][$num] . '</span>';
			}
			echo '</div>';
		}
	}
?>

<!DOCTYPE html>
<html lang="bg-Bg">
<head>
	<title>Домашно по PHP Functions - Задача 1</title>
	<link rel="stylesheet" type="text/css" href="styles/style.css">
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
					<span id="task_current">Задача 1</span>
				</li>
				<li>
					<a href="tasks/task_2.php">Задача 2</a>
				</li>
				<li>
					<a href="tasks/task_3.php">Задача 3</a>
				</li>				
			</ul>
		</div>
		<div id="content">
			<div id="content_top">
				<h4>Задача 1</h4>
				Да се декларира функция, която отпечатва индексите на елементите на масив и тяхната стойност. Масивът трябва да бъде подаден по примера [[‘arr’, 1], [1, 8, ‘demo array’], [true]]
				<form method="post">
					<textarea name="textarea"></textarea>					
					<input type="submit" name="submit" value="Отпечатай">
				</form>
			</div>
			<div id="content_bottom">
				<?php
					if(isset($_POST['submit'])){
						if (check_is_user_input_ok($_POST['textarea']) == true){
							print_array(split_user_input($_POST['textarea']));
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