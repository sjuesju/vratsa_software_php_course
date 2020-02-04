<!DOCTYPE html>
<html lang="bg-Bg">
<head>
	<title>Домашно за PHP Nested Loops - Задача 3</title>
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
					<span id="task_current">Задача 3</span>					
				</li>
				<li>
					<a href="../tasks/task_4.php">Задача 4</a>				
				</li>
			</ul>
		</div>
		<div id="content">
			<div id="content_top">
				<h4>Задача 3</h4>
				Напишете програма, която отпечатва на екрана таблицата за умножение до 10
				<form method="post">
					<input type="submit" name="submit" value="Генерирай таблицата">
				</form>
			</div>
			<div id="content_bottom">
				<?php
					if (isset($_POST["submit"])){
						echo '<table id="table_task_3">';
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
					}					
				?>
			</div>
		</div>
	</div>	
</body>
</html>