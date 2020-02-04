<!DOCTYPE html>
<html lang="bg-Bg">
<head>
	<title>PHP Conditionals - Задача 3 - 
		<?php
			if (!empty($_POST)){
				switch ($_POST['week_day']) {
					case 'Monday':
						echo "Понеделник";
						break;
					case 'Tuesday':
						echo "Вторник";
						break;
					case 'Wednesday':
						echo "Сряда";
						break;
					case 'Thursday':
						echo "Четвъртък";
						break;
					case 'Friday':
						echo "Петък";
						break;
					case 'Saturday':
						echo "Събота";
						break;
				}
			}
		?>
	</title>
	<link rel="stylesheet" type="text/css" href="../styles/style.css">
</head>
<body>
	<div id="container">
		<div id="home">
			<h3><a href="task_3.php">ОБРАТНО</a></h3>
		</div>
		<div id="header">			
			<h4>
				<?php
					if (!empty($_POST)){
						switch ($_POST['week_day']) {
							case 'Monday':
								echo "Laugh on Monday, laugh for danger.";
								break;
							case 'Tuesday':
								echo "Laugh on Tuesday, kiss a stranger.";
								break;
							case 'Wednesday':
								echo "Laugh on Wednesday, laugh for a letter.";
								break;
							case 'Thursday':
								echo "Laugh on Thursday, something better.";
								break;
							case 'Friday':
								echo "Laugh on Friday, laugh for sorrow.";
								break;
							case 'Saturday':
								echo "Laugh on Saturday, joy tomorrow.";
								break;
						}
					}
				?>
			</h4> 
		</div>		
		<div id="footer">
		</div>
	</div>	
</body>
</html>