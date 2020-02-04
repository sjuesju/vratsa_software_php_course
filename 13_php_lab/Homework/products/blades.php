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
					Дървета
				</li>				
				<li>
					<a href="shoes.php">Маратонки</a>
				</li>				
			</ul>
		</div>
		<div id="content">
			<h4>Дървета за тенис на маса</h4>
			<div class="product_text">
				<div>
					<img src="../images/donic-new-impuls-7-5.jpg" class="product_images" alt="table tennis blades donis">
				</div>
				Donic New Impuls 7.5
				<?php
					if (isset($_SESSION['logged_in'])){
						echo 'Цена: 180 лева';
						?>
						<form action="..\basket.php" method="post">
							Изберете количество 
							<select name="new_impuls_quantity">
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
					<img src="../images/butterfly-lin-guyoan.jpg" class="product_images" alt="table tennis butterfly blade">
				</div>
				Butterfly Lin Gaoyuan ALC
				<?php
					if (isset($_SESSION['logged_in'])){
						echo 'Цена: 340 лева';
						?>
						<form action="..\basket.php" method="post">
							Изберете количество 
							<select name="lin_gaoyuan_quantity">
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