<?php
		session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>	</title>
</head>
<body>
	<h1> Hello <?php echo $_SESSION['user_name']; ?></h1>
	<a href="login.php">Назад</a>
	<a href="logout.php">Излез</a>
	<p>
	<?php
		var_dump($_SESSION);
	?>
</body>
</html>