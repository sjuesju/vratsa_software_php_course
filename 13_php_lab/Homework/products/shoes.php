<?php
	session_start();	
	
?>
<!DOCTYPE html>
<html lang="bg-Bg">
<head>
	<title>Онлайн магазин за спортни стоки</title>
	<link rel="stylesheet" type="text/css" href="../styles/style.css">
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
					<a href="../index.php">Начало</a>
				</li>
				<li>
					<a href="rubbers.php">Гуми</a>
				</li>
				<li>
					<a href="blades.php">Дървета</a>
				</li>				
				<li>
					Маратонки
				</li>								
			</ul>
		</div>
		<div id="content">
			<h4>Маратонки за тенис на маса</h4>
			<div class="product_text">
				<div>
					<img src="../images/joola-touch.jpg" class="product_images" alt="table tennis shoes joola">
				</div>
				Joola Touch
				<?php
					if (isset($_SESSION['logged_in'])){
						echo 'Цена: 200 лева';
						?>
						<form action="..\basket.php" method="post">
							Изберете количество 
							<select name="joola_touch_quantity">
								<option value="0">0</option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6">6</option>
								<option value="7">7</option>
								<option value="8">8</option>
								<option value="9">9</option>
								<option value="10">10</option>
							</select>
							<input type="submit" name="buy" value="Добави в количката">
						</form>					
						<?php
					}
				?>
			</div> 
			<div class="product_text">
				<div>
					<img src="../images/joola-rally.jpg" class="product_images" alt="table tennis joola shoes">
				</div>
				Joola Rally
				<?php
					if (isset($_SESSION['logged_in'])){
						echo 'Цена: 190 лева';
						?>
						<form action="..\basket.php" method="post">
							Изберете количество 
							<select name="joola_rally_quantity">
								<option value="0">0</option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6">6</option>
								<option value="7">7</option>
								<option value="8">8</option>
								<option value="9">9</option>
								<option value="10">10</option>
							</select>
							<input type="submit" name="buy" value="Добави в количката">
						</form>					
						<?php
					}
				?>
			</div> 
			
		</div>
	</div>	
</body>
</html>