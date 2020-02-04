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

	function return_index_bigger_than_neighbours($array){
		$count = sizeof($array);
		for ($i=0; $i < $count; $i++) { 
			if ($i == 0){
				if ($array[$i] > $array[$i+1] && $array[$i] > $array[$count - 1]){
					return $i;
				}
			} elseif ($i == $count - 1){
					if ($array[$i] > $array[$i-1] && $array[$i] > $array[0]){
						return $i;
					}
			} else {
				if ($array[$i] > $array[$i-1] && $array[$i] > $array[$i + 1]){
						return $i;
					}
			}
		}
		return 'no such element';
	}
?>
<!DOCTYPE html>
<html lang="bg-Bg">
<head>
	<title>Домашно по PHP Functions - Задача 2</title>
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
					<span id="task_current">Задача 2</span>					
				</li>
				<li>
					<a href="../tasks/task_3.php">Задача 3</a>
				</li>
			</ul>
		</div>
		<div id="content">
			<div id="content_top">
				<h4>Задача 2</h4>
				Декларирайте функция, която отпечатва индекса на първия елемент, който е по-голям от двата си съседни елемента. Ако няма такъв елемент - функцията да връща съответния отговор. Въведете масива по следния вид [2, 11, 2, 3, 0, 2].
				<form method="post">
					Въведете масива: 
					<input type="text" name="array_num" id="num_repetitions">
					<input type="submit" name="submit" value="Генерирай масива">
				</form>
			</div>
			<div id="content_bottom">
				<?php
					if (isset($_POST["submit"])){						
						if (check_is_user_input_ok($_POST['array_num']) === true){
							$array = clean_array(split_user_input($_POST['array_num']));
							echo return_index_bigger_than_neighbours($array);
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