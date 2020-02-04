<!DOCTYPE html>
<html lang="bg-Bg">
<head>
	<title>PHP Conditionals - Задача 2</title>
	<link rel="stylesheet" type="text/css" href="../styles/style.css">
</head>
<body>
	<div id="container">
		<div id="home">
			<h3><a href="..\index.php">ОБРАТНО</a></h3>
		</div>
		<div id="header">
			<h1>Задача 2</h1>
			<h4>Да се напише програма, която да изчислява сметката за ток</h4> 
		</div>
		<div id="header_bottom_dot">
		</div>
		<div id="task_field">
			<form method="post">
				<fieldset id="text_fieldset">
					<legend>Въведете използваните киловати</legend>
					<input type="text" class="add_numbers" name="kvs">
					<input type="submit" id="submit" name="submit" value="Изчисли">
				</fieldset>
			</form>
		</div>
		<div id="task_answer">
			<?php
				if (isset($_POST["submit"])){
					$is_ok = true;
					if (isset($_POST['kvs']) && strlen(htmlspecialchars($_POST['kvs'])) > 0 && is_numeric($_POST['kvs'])){
						$kvs = $_POST['kvs'];
						$price_increment = 1;
						if ($kvs < 51) {
							echo ($kvs * 0.1 * $price_increment) * 1.2 . ' лева';
						} elseif ($kvs < 151){
							$base = $kvs - 50;
							echo ((50 * 0.1 * $price_increment) + ($base * 0.15 * $price_increment)) * 1.2 . ' лева';
						} elseif ($kvs < 251){
							$base = $kvs - 150;
							echo ((50 * 0.1 * $price_increment) + (100 * 0.15 * $price_increment) + ($base * 0.25 * $price_increment)) * 1.2 . ' лева';
						} else {
							$base = $kvs - 250;
							echo ((50 * 0.1 * $price_increment) + (100 * 0.15 * $price_increment) + (100 * 0.25 * $price_increment) + ($base * 0.35 * $price_increment)) * 1.2 . ' лева';
						}
					} else { 
						echo 'Не сте въвели коректно число';	
						$is_ok = false;	
					}
				}
			?>
		</div>
		<div id="footer">
		</div>
	</div>	
</body>
</html>