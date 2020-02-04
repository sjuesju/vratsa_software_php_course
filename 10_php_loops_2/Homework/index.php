<!DOCTYPE html>
<html lang="bg-Bg">
<head>
	<title>Домашно за PHP Nested Loops - Задача 1</title>
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
				Домашно по PHP Nested Loops
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
				<li>
					<a href="tasks/task_4.php">Задача 4</a>
				</li>
			</ul>
		</div>
		<div id="content">
			<div id="content_top">
				<h4>Задача 1</h4>
				Напишете програма, която създава масив от 20 елемента, като стойността на всеки елемент се получава от произведението на съответния индекс и 5.
				<form method="post">					
					<input type="submit" name="submit" value="Генерирай масива">
				</form>
			</div>
			<div id="content_bottom">
				<?php
					if(isset($_POST['submit'])){
						$array = [];
						for ($i=0; $i < 20 ; $i++) { 
							array_push($array, $i * 5);
						}
						$count = sizeof($array);
						echo '<span class="five_rows_combined">';
						for ($i=1; $i <= $count; $i++) { 
							if ($i % 5 == 0 && $i != $count){
								echo '<div>' . ($i - 1) . ' * 5 = ' . $array[$i - 1] . '</div>' . '</span><span class="five_rows_combined">';
							} else {
								echo '<div>' . ($i - 1) . ' * 5 = ' . $array[$i - 1] . '</div>';
							}							
						}
						echo '</span>';
					}
				?>
			</div>
		</div>
	</div>	
</body>
</html>