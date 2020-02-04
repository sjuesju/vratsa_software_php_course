<!DOCTYPE html>
<html lang="bg-Bg">
<head>
	<title>Домашно за PHP work with user input - Задача 2</title>
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
			</ul>
		</div>
		<div id="content">
			<div id="content_top">
				<h4>Задача 2</h4>
				Напишете програма, която по зададени единици използвана електроенергия и тяхната цена изчислява сметката за ток
				<form method="post">
					Въведете броя на използваните киловати: 
					<input type="number" name="kvs" id="num_repetitions">
					<input type="submit" name="submit" value="Изчисли">
				</form>
			</div>
			<div id="content_bottom">
				<?php
					if (isset($_POST["submit"])){
						if (isset($_POST['kvs'])){
							$kvs = $_POST['kvs'];
							$price_first = 0.1;
							$price_second = 0.15;
							$price_third = 0.25;
							$price_fourth = 0.35;
							$price_increment = 1;

							if ($kvs < 51) {
								echo 'Сметката ви за ток е ' . number_format($kvs * $price_first * 1.2 * $price_increment, 2) . ' лева';
							} elseif ($kvs < 151){
								echo 'Сметката ви за ток е ' . number_format(((50 * $price_first) + (($kvs - 50) * $price_second)) * 1.2 * $price_increment, 2) . ' лева';
							} elseif ($kvs < 251){
								echo 'Сметката ви за ток е ' . number_format(((50 * $price_first) + (100 * $price_second) + (($kvs - 150) * $price_third)) * 1.2  * $price_increment, 2) . ' лева';
							} else {
								echo 'Сметката ви за ток е ' . number_format(((50 * $price_first) + (100 * $price_second) + (100 * $price_third) + (($kvs - 250) * $price_fourth)) * 1.2 * $price_increment, 2) . ' лева';
							}
						}
					}
				?>
			</div>
		</div>
	</div>	
</body>
</html>