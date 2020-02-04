<?php
	function change_english_text($text){
		if (isset($text) == false || strlen($text) == 0){
			return 'Въведете коректни данни';
		}
		$str1_to_replace = array('a', 'A', 't', 'T');
		$str1_replace = array('u', 'U', 'v', 'V');

		$str2_to_replace = array('e', 'E', 's', 'S');
		$str2_replace = array('o', 'O', 'p', 'P');

		return str_replace($str1_to_replace, $str1_replace, substr($text, 0, strlen($text) / 2)) . str_replace($str2_to_replace, $str2_replace, substr($text, strlen($text) / 2));
	}

	function change_bulgarian_text($user_input){	
		if(verify_input($user_input[1]) == false || verify_input($user_input[2]) == false || verify_input($user_input[3]) == false || verify_input($user_input[4]) == false || strlen($user_input[0]) == 0){			
			return 'Въведете коректни данни';
		}
		$str1_to_replace = create_array_from_input($user_input[1]);
		$str1_replace = create_array_from_input($user_input[2]);
		if (sizeof($str1_to_replace) != sizeof($str1_replace)){
			return 'Въведете коректни данни! Буквите за смяна в първите две полета, трябва да са с еднакъв брой';
		}
		$str2_to_replace = create_array_from_input($user_input[3]);
		$str2_replace = create_array_from_input($user_input[4]);
		if (sizeof($str2_to_replace) != sizeof($str2_replace)){
			return 'Въведете коректни данни! Буквите за смяна във вторите две полета, трябва да са с еднакъв брой';
		}

		return str_replace($str1_to_replace, $str1_replace, substr($user_input[0], 0, strlen($user_input[0]) / 2)) . str_replace($str2_to_replace, $str2_replace, substr($user_input[0], strlen($user_input[0]) / 2));
	}

	function verify_input($text){
		$splitted = explode(',', $text);		
		for ($i=0; $i < sizeof($splitted); $i++) { 
			if (mb_strlen(trim($splitted[$i])) != 1){	
				return false;
			}
		}
		return true;
	}

	function create_array_from_input($text){
		$splitted = explode(',', $text);
		$array = [];
		for ($i=0; $i < sizeof($splitted); $i++) { 
			$array[$i] = trim($splitted[$i]);
		}
		return $array;
	}
?>

<!DOCTYPE html>
<html lang="bg-Bg">
<head>
	<title>Враца Софтуер - Домашно PHP Strings</title>
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
				Домашно - PHP Strings
			</h3>
			<ul>
				<li>
					Задача 1
				</li>
				<li>
					<a href="tasks/task_two.php">Задача 2</a>
				</li>							
			</ul>
		</div>
		<div id="content">
			<div id="content_top_first">
				<h4>Задача 1</h4>
				Дефинирайте функция, която
				<ul>
					<li>
						Кодира даден текст на английски по следния начин: на първата половина от текста всички букви ‘a’ се заменят от ‘u’ и всички букви ‘t’ се заменят от ‘v’. Във втората половина от текста – всички букви ‘e’ се заменят от ‘o’ и всички ‘s’ се заменят от ‘p’.
					</li>
					<li>
						Направете вариант за текст на кирилица. Функцията разделя текста на две части. Буквите, които търси и заменя за първата и втората част подавайте с форма.
					</li>
				</ul>	
				<form method="post">
					<div class="margin_bottom_10">
						Текст за обработка 
						<input type="text" name="text">
						Вариант
						<select name="variation">	
							<option value="1">Първи</option>
							<option value="2">Втори</option>
						</select>
					</div>
					<div class="margin_bottom_10">
						Първи букви за смяна
						<input type="text" name="chars_remove_first" placeholder="Раздели със запетайка">
						Първи букви за добавяне
						<input type="text" name="chars_add_first"  placeholder="Раздели със запетайка">
						
					</div>
					<div class="margin_bottom_10">
						Втори букви за смяна
						<input type="text" name="chars_remove_second" placeholder="Раздели със запетайка">
						Втори букви за добавяне
						<input type="text" name="chars_add_second"  placeholder="Раздели със запетайка">						
					</div>
					<div>
						<input type="submit" name="submit" value="Давай">
					</div>
				</form>				
			</div>
			<div id="content_bottom_first">
				<?php
					if(isset($_POST['submit'])){
						if ($_POST['variation'] == '1'){
							echo change_english_text($_POST['text']);
						} else{
							$user_input = array($_POST['text'], $_POST['chars_remove_first'], $_POST['chars_add_first'], $_POST['chars_remove_second'], $_POST['chars_add_second']);
							echo change_bulgarian_text($user_input);
						}
					}
				?>
			</div>
		</div>
	</div>	
</body>
</html>