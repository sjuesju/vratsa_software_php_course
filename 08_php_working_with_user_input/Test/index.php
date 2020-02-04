<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Логин</title>
</head>
<body>
	<form action="login.php" method="post">
		Потребител: <input type="text" name="user_name">
		<input type="submit" name="submit" value="Вход">		
	</form>
	<?php var_dump($_SESSION);?>
</body>
</html>