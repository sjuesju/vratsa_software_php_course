<!DOCTYPE html>
<html lang="bg-Bg">
<head>
	<title>PHP Conditionals - Задача 4</title>
	<link rel="stylesheet" type="text/css" href="../styles/style.css">
</head>
<body>
	<div id="container">
		<div id="home">
			<h3><a href="..\index.php">ОБРАТНО</a></h3>
		</div>
		<div id="header">
			<h1>Задача 4</h1>
			<h4>Да се напише програма, която да връща месец спрямо зададено число</h4> 
		</div>
		<div id="header_bottom_dot">
		</div>
		<div id="task_field">
			<form method="post">
				<fieldset id="text_fieldset">
					<legend>Въведете число</legend>
					<input type="text" class="add_numbers" name="month">
					<input type="submit" id="submit" name="submit" value="Изведи">
				</fieldset>

			</form>
		</div>
		<div id="task_answer">
			<?php
				if (isset($_POST["submit"])){
					if (isset($_POST['month']) && strlen(htmlspecialchars($_POST['month'])) > 0 && is_numeric($_POST['month'])){			
						$month = $_POST['month'];
						if ($month < 1 || $month > 12)
						{
							echo 'Не сте въвели коректно число';	
						} else {
							switch ($month) {
								case 1:
									echo 'Януари';
									break;
								case 2:
									echo 'Февруари';
									break;
								case 3:
									echo 'Март';
									break;
								case 4:
									echo 'Април';
									break;
								case 5:
									echo 'Май';
									break;
								case 6:
									echo 'Юни';
									break;
								case 7:
									echo 'Юли';
									break;
								case 8:
									echo 'Август';
									break;
								case 9:
									echo 'Септември';
									break;
								case 10:
									echo 'Октомври';
									break;
								case 11:
									echo 'Ноември';
									break;
								case 12:
									echo 'Декември';
									break;
							}
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