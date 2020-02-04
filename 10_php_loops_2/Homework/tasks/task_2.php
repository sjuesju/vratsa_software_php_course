<!DOCTYPE html>
<html lang="bg-Bg">
<head>
	<title>Домашно за PHP Nested Loops - Задача 2</title>
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
				Домашно по PHP Loops
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
				<li>
					<a href="../tasks/task_4.php">Задача 4</a>
				</li>
			</ul>
		</div>
		<div id="content">
			<div id="content_top">
				<h4>Задача 2</h4>
				Напишете програма, която намира най-малката и най-голямата дължина на елемент в масив от стрингове
				<form method="post">
					Въведете големината на масива: 
					<input type="number" name="array_num" id="num_repetitions" min="1">
					<input type="submit" name="submit" value="Генерирай масива">
				</form>
			</div>
			<div id="content_bottom">
				<?php
					if (isset($_POST["submit"])){
						if (isset($_POST["array_num"])){
							$array = [];
							$all_words = '';
							for ($i=0; $i < $_POST["array_num"]; $i++) { 
								$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
							    $characters_length = strlen($characters);
							    $random_string = '';
							    for ($a = 0; $a < rand(1, 20); $a++) {
							        $random_string .= $characters[rand(0, $characters_length - 1)];
							    }
							    array_push($array, $random_string);
							    if ($all_words == ''){
							    	$all_words = $random_string;
							    } else {
							    	$all_words .= ', ' . $random_string;
							    }
							}
							$min_length = strlen($array[0]);
							$min_lenght_word = $array[0];
							$max_length = strlen($array[0]);
							$max_length_word = $array[0];
							$count = sizeof($array);
							for ($i=1; $i < $count; $i++) { 
								if (strlen($array[$i]) < $min_length){
									$min_length = strlen($array[$i]);
									$min_lenght_word = $array[$i];
								} elseif(strlen($array[$i]) == $min_length){
									$min_lenght_word .= '; ' . $array[$i];
								}

								if (strlen($array[$i]) > $max_length){
									$max_length = strlen($array[$i]);
									$max_length_word = $array[$i];
								} elseif(strlen($array[$i]) == $max_length){
									$max_length_word .= '; ' . $array[$i];
								}
							}
							
							if ($min_length == 1){
								echo $min_length . ' знак';
							} else {
								echo $min_length . ' знака';
							}

							if(strpos($min_lenght_word, ';') !== false){
								echo ' е най-кратката дължина, а думите са: ' . $min_lenght_word . '.';
							} else {
								echo ' е най-кратката дължина, а думата е ' . $min_lenght_word . '.';
							}
							echo '<br>';
							if(strpos($max_length_word, ';') !== false){
								echo $max_length . ' знака е най-голямата дължина, а думите са ' . $max_length_word . '.';
							} else {
								echo $max_length . ' знака е най-голямата дължина, а думата ес ' . $max_length_word . '.';
							}
							echo '<p>';
							echo 'Списък на всички думи в масива: ' . $all_words;
						}
					}
				?>
			</div>
		</div>
	</div>	
</body>
</html>