<!DOCTYPE html>
<html>
<head>
	<title>Въведете своята парола</title>
</head>
<body>
	<form method="post">
		Потребителско име: <input type="text" name="user_name">
		Парола: <input type="password" name="password">
		<input type="submit" name="submit" value="Виж">
	</form>
	<p>
		<?php
			if (!empty($_POST)){
				$user_name_input = $_POST['user_name'];
				$password_input = $_POST['password'];
				if ($user_name_input == 'petar' && $password_input == '1234'){
					echo 'Добре дошъл petar';
				} elseif ($user_name_input != 'petar'){
					echo 'Грешно потребителско име';
				} else {
					echo 'Грешна парола';
				}
			}
		?>
</body>
</html>