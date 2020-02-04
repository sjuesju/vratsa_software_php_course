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
				Заповядайте в нашия онлайн магазин за спортни стоки за тенис на маса. За да влезете, изберете потребителско име, въведете пари по вашата сметка и натиснете бутона отдолу.	
				<div id="login_form">	
					<form method="post" action="login.php">
						Потребителско име: 
						<input type="text" name="user_name">
						Сума за пазаруване: 
						<input type="number" name="user_funds" min="1">
						<input type="submit" name="login_button" id="login_button" value="Влез">
					</form>	
				</div>					
			</div>
			<div id="content_bottom">

			</div>
		</div>
	</div>	
</body>
</html>