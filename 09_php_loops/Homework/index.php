<!DOCTYPE html>
<html lang="bg-Bg">
<head>
	<title>Домашно за PHP work with user input - Задача 1</title>
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
				Домашно по PHP Loops
			</h3>
			<ul>
				<li>
					<span id="task_current">Задача 1</span>
				</li>
				<li>
					<a href="tasks/task_2.php">Задача 2</a>
				</li>
			</ul>
		</div>
		<div id="content">
			<div id="content_top">
				<h4>Задача 1</h4>
				Напишете програма, която отпечатва последователност от букви
				<form method="post">
					Въведете броя на повторенията: 
					<input type="number" name="num_repetitions" id="num_repetitions">
					<input type="submit" name="submit" value="Давай">
				</form>
			</div>
			<div id="content_bottom">
				<?php
					if(isset($_POST['submit'])){
						if(!empty($_POST['num_repetitions'])){
							$result = '';
							$num = 0;
							while ($num < $_POST['num_repetitions']) {
								$result .= 'a';
								echo $result . '<br>';
								$num++;
							}
						}
					}
				?>
			</div>
		</div>
	</div>	
</body>
</html>