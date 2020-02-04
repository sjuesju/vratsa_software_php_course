<!DOCTYPE html>
<html lang="bg-Bg">
<head>
	<title>PHP Conditionals - Задача 1</title>
	<link rel="stylesheet" type="text/css" href="../styles/style.css">
</head>
<body>
	<div id="container">
		<div id="home">
			<h3><a href="..\index.php">ОБРАТНО</a></h3>
		</div>
		<div id="header">
			<h1>Задача 1</h1>
			<h4>Да се напише програма, която подрежда 3 числа в нарастващ ред</h4> 
		</div>
		<div id="header_bottom_dot">
		</div>
		<div id="task_field">
			<form method="post">
				<fieldset id="text_fieldset">
					<legend>Въведете три числа</legend>
					<input type="text" class="add_numbers" name="number_1">
					<input type="text" class="add_numbers" name="number_2">
					<input type="text" class="add_numbers" name="number_3">
					<input type="submit" id="submit" name="submit" value="Подреди">
				</fieldset>

			</form>
		</div>
		<div id="task_answer">
			<?php
				$num_1 = 0;
				$num_2 = 0;
				$num_3 = 0;
				if (isset($_POST["submit"])){
					$is_ok = true;
					if (isset($_POST['number_1']) && strlen(htmlspecialchars($_POST['number_1'])) > 0 && is_numeric($_POST['number_1'])){
						$num_1 = $_POST['number_1'];
						if (isset($_POST['number_2']) && strlen(htmlspecialchars($_POST['number_2'])) > 0 && is_numeric($_POST['number_2'])){
								$num_2 = $_POST['number_2'];
								if (isset($_POST['number_3']) && strlen(htmlspecialchars($_POST['number_3'])) > 0 && is_numeric($_POST['number_3'])){
									$num_3 = $_POST['number_3'];
											if ($num_1 <= $num_2 && $num_1 <= $num_3){
												echo $num_1 . ', ';
												if ($num_2 <= $num_3){
													echo $num_2 . ', ' . $num_3;
												} else {
													echo $num_3 . ', ' . $num_2;
												}
											} else if ($num_2 <= $num_1 && $num_2 <= $num_3){
												echo $num_2 . ', ';
												if ($num_1 <= $num_3){
													echo $num_1 . ', ' . $num_3;
												} else {
													echo $num_3 . ', ' . $num_1;
												}
											} else {
												echo $num_3 . ', ';
												if ($num_1 <= $num_2){
													echo $num_1 . ', ' . $num_2;
												} else {
													echo $num_2 . ', ' . $num_1;
												}
											}
								} else { 
									echo 'Не сте въвели коректно число';	
									$is_ok = false;				
								}
							} else { 
								echo 'Не сте въвели коректно число';
								$is_ok = false;					
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