<!DOCTYPE html>
<html lang="bg-Bg">
<head>
	<title>Домашно за PHP Nested Loops - Задача 4</title>
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
					<a href="../tasks/task_2.php">Задача 2</a>				
				</li>
				<li>
					<a href="../tasks/task_3.php">Задача 3</a>				
				</li>
				<li>
					<span id="task_current">Задача 4</span>					
				</li>
			</ul>
		</div>
		<div id="content">
			<div id="content_top_task_4">
				<h4>Задача 4</h4>
				Напишете програма, при която от форма получаваме редица от числа разделени със запетая и интервал. Програмата отпечатва таблица. В първата колона са отпечатани числата, а във втората - сумата от цифрите на съответното число. Ако е подадена стойност, която не е число, то в таблицата се отпечатва “Не мога да сумирам”.

				<form method="post">
					<textarea name="textarea"></textarea>
					<input type="submit" name="submit" id="submit_4" value="Генерирай таблицата">
				</form>
			</div>
			<div id="content_bottom">
				<?php
					if (isset($_POST["submit"])){
						$array = explode(',', $_POST['textarea']);
						echo '<table id="table_task_4">';
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
				?>
			</div>
		</div>
	</div>	
</body>
</html>