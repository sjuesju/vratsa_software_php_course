<!DOCTYPE html>
<html lang="bg-Bg">
<head>
	<title>PHP work with user input - Задача 1</title>
	<link rel="stylesheet" type="text/css" href="../styles/style.css">
</head>
<body>
	<div id="container">
		<div id="home">
			<h3><a href="..\index.php">ОБРАТНО</a></h3>
		</div>
		<div id="header">
			<h1>Задача 1</h1>
			<h4>Да се напише програма, при която потребителя въвежда число, опитвайки се да отгатне предварително зададеното от вас число в интервал от 0-10. Получава отговор дали е отгатнал, дали числото е по-голямо или по-малко от зададеното.</h4> 
		</div>
		<div id="header_bottom_dot">
		</div>
		<div id="task_field">
			<form method="post">
				<fieldset id="text_fieldset">
					<legend>Въведете вашето число от 0 до 10</legend>
					<input type="number" class="add_numbers" name="number_1">
					<input type="submit" id="submit" name="submit" value="Изпрати">
				</fieldset>

			</form>
		</div>
		<div id="task_answer">
			<?php
				if (isset($_POST["submit"])){
					if (isset($_POST['number_1'])){						
						if ($_POST['number_1'] >= 0 && $_POST['number_1'] < 11){
							$game_number = rand(0, 10);
							if ($_POST['number_1'] == $game_number){
								echo 'Браво уцелихте числото!!!';
							} else {
								echo 'Вие предположихте ' .  $_POST['number_1'] . ', а търсенето число беше ' . $game_number . '.<br>Опитайте отново!'; 
							}

						} else {
							echo 'Не сте въвели коректно число';
						}
					} else { 
						echo 'Не сте въвели коректно число';	
					}
				}

			?>
		</div>
		<div id="footer">
		</div>
	</div>	
</body>
</html>