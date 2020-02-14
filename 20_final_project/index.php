<?php
	 include 'functions/functions.php';	 
?>

<!DOCTYPE html>
<html lang="bg-Bg">
<head>
	<title>PHP 1 проект на Петър Иванов</title>
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
				PHP 1 проект на Петър Иванов
			</h3>

			<h4>
				Задача на проекта
			</h4>
			Получавате масив от стрингове и вашата задача е да намерите най-малкия брой промени в знаците, необходими за всеки първи знак на стринг да бъде еднакъв с последния знак от предхождащия го стринг. 
			<p>
			Нямате право да променяте последователността на стринговете!			
		</div>
		<div id="content">
			<div id="content_top">
				<h4>Въведете масив</h4>
				<form method="post">			
					<input type="text" id="array_input_text" name="text" placeholder="Елементите на масива са разделени със запетайки">		
					<input type="submit" name="submit" value="Изчисли">
				</form>
			</div>
			<div id="content_bottom">
				<?php
					if(isset($_POST['submit']) && !empty($_POST['text'])){
						$input_string = htmlspecialchars(str_replace('"', '', $_POST['text']));
						$array = array_map('trim', explode(',', $input_string));
						$final_array = check_with_single_letters($array, 0);

						echo '<div class="margin_bottom_20">Минимален брой промени: ' . $final_array[0] . '</div>';

						echo '<div><div class="array_label">Първоначален масив: </div>' ;
						print_array($array);	
						echo '</div>';

						echo '<div class="margin_bottom_20"><div class="array_label">Обновен масив: </div>';
						print_array($final_array[1]);
						echo '</div>';

						echo '<h4>Обяснения</h4>';
						echo $final_array[2];					

					} else {
						echo 'Въведете данни';	
					}
				?>
			</div>
		</div>
	</div>	
</body>
</html>