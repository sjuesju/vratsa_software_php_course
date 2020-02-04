<?php
	session_start();
	
	function display_user_name_funds(){
		echo $_SESSION['user_name'] . ' добре дошли! Вие разполагате с ' . $_SESSION['user_funds'] . ' лева! Вашата количка е празна. <a href="log_out.php">Излезте</a>';
	}

	function display_final_backet(){
		$basket_items = explode('#', $_SESSION['final_order']);		
		echo 'Вашата кошница съдържа следните продукти:<p><ul>';
		$total_sum = 0;
		foreach ($basket_items as $item) {
			$items = explode('|', $item);
			if ($items[1] == 1){
				echo '<li>1 бройка ' . $items[0] . ' на обща стойност ' . ($items[1] * $items[2]) . ' лева'; 
			} else {
				echo '<li>' . $items[1] . ' бройки ' . $items[0] . ' на обща стойност ' . ($items[1] * $items[2]) . ' лева'; 
			}
			$total_sum +=  ($items[2] * $items[1]);
		}
		echo '</ul>Обща сума на продуктите в кошницата: ' . $total_sum . '<p>';
		if ($total_sum > $_SESSION['user_funds']){
			echo 'Нямате достатъчно средства за да извършите плащането!';
		} else {
			echo 'Вашата налична сума е ' . ($_SESSION['user_funds'] - $total_sum);
			$_SESSION['user_funds'] -= $total_sum;
		}
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
					<a href="index.php">Начало</a>
				</li>
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
					if (isset($_SESSION['logged_in'])){
						display_user_name_funds();
					}

				?>						
			</div>
			<div id="content_bottom">
				<?php					
					display_final_backet();					
				?>
			</div>
		</div>
	</div>	
</body>
</html>