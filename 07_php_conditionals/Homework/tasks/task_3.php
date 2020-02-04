<!DOCTYPE html>
<html lang="bg-Bg">
<head>
	<title>PHP Conditionals - Задача 3</title>
	<link rel="stylesheet" type="text/css" href="../styles/style.css">
</head>
<body>
	<div id="container">
		<div id="home">
			<h3><a href="..\index.php">ОБРАТНО</a></h3>
		</div>
		<div id="header">
			<h1>Задача 3</h1>
			<h4>Да се напише програма, която да изчислява 10-та цифра на ЕГН</h4> 
		</div>
		<div id="header_bottom_dot">
		</div>
		<div id="task_field">
			<form method="post">
				<fieldset id="text_fieldset">
					<legend>Въведете първите 9 номера на ЕГН</legend>
					<input type="text" id="add_ucn" name="ucn">
					<input type="submit" id="submit" name="submit" value="Изчисли">
				</fieldset>
			</form>
		</div>
		<div id="task_answer">
			<?php
				if (isset($_POST["submit"])){
					if (isset($_POST['ucn']) && strlen(htmlspecialchars($_POST['ucn'])) == 9 && is_numeric($_POST['ucn'])){	
						$year = substr($_POST['ucn'], 0, 2);
				        $mon  = substr($_POST['ucn'], 2, 2);
				        $day  = substr($_POST['ucn'], 4,2);
				        $is_ucn_valid = true;

				        if ($mon > 40) {
				            if (checkdate($mon - 40, $day, $year + 2000) == false){
				            	$is_ucn_valid = false;
				            } 
				        } 
				        if ($mon > 20) {
				            if (checkdate($mon - 20, $day, $year + 1800) == false){
				            	
				            } 
				        } 
				        if (checkdate($mon, $day, $year + 1900) == false){
				        	$is_ucn_valid = false;
				        } 

				        if ($is_ucn_valid == true){
				        	$ucn_nums = str_split($_POST['ucn']);	
							$ucn_sum = ($ucn_nums[0] * 2) + ($ucn_nums[1] * 4) + ($ucn_nums[2] * 8) + ($ucn_nums[3] * 5) + ($ucn_nums[4] * 10) + ($ucn_nums[5] * 9) + ($ucn_nums[6] * 7) + ($ucn_nums[7] * 3) + ($ucn_nums[8] * 6);
							$ucn_rest = $ucn_sum / 11;
							$ucn_final = explode('.', $ucn_rest);
							echo $ucn_sum - (11 * $ucn_final[0]);
				        } else {
				        	echo 'Не сте въвели коректно ЕГН';	
				        }        
						
					} else { 
						echo 'Не сте въвели коректно ЕГН';	
					}
				}
			?>
		</div>
		<div id="footer">
		</div>
	</div>	
</body>
</html>