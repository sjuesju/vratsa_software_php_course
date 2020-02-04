<?php
	session_start();

	function display_user_name_funds(){
		echo $_SESSION['user_name'] . ' добре дошли! Вие разполагате с ' . $_SESSION['user_funds'] . ' лева! Вашата количка е празна. <a href="log_out.php">Излезте</a>';
	}
?>

<!DOCTYPE html>
<html lang="bg-Bg">
<head>
	<title>Онлайн магазин за спортни стоки</title>
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
				Тенис стоки на отлични цени
			</h3>
			<ul>
				<li>
					<a href="products/rubbers.php">Гуми</a>
				</li>
				<li>
					<a href="products/blades.php">Дървета</a>
				</li>				
				<li>
					<a href="products/shoes.php">Маратонки</a>
				</li>									
			</ul>
		</div>
		<div id="content">
			<div id="content_top">
				<h4>Онлайн магазин за продукти за Тенис на маса</h4>
				<?php
					if (isset($_POST['login_button']) && strlen($_POST['user_name']) > 0){
						$_SESSION['user_name'] = $_POST['user_name'];
						$_SESSION['user_funds'] = $_POST['user_funds'];
						$_SESSION['logged_in'] = true;
						display_user_name_funds();
					} else {
						echo 'Не сте въвели потребителско име. Опитайте отново!';
					}

				?>						
			</div>
			<div id="content_bottom">
				<?php
					if (isset($_POST['login_button']) && strlen($_POST['user_name']) > 0){
						echo 'Добре дошли! Моля изберете желаните продукти от категориите вляво';
					}
				?>
			</div>
		</div>
	</div>	
</body>
</html>