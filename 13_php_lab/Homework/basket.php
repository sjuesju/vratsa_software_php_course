<?php
	session_start();
	
	function display_user_name_funds(){
		echo $_SESSION['user_name'] . ' добре дошли! Вие разполагате с ' . $_SESSION['user_funds'] . ' лева! Вашата количка е празна. <a href="log_out.php">Излезте</a>';
	}

	function add_value_to_final_order($item, $quantity, $price){
		if(isset($_SESSION['final_order'])){
			$_SESSION['final_order'] .= '#' . $item . '|' . $quantity . '|' . $price;
		} else {
			$_SESSION['final_order'] = $item . '|' . $quantity . '|' . $price;
		}
	}

	function display_current_backet(){
		$basket_items = explode('#', $_SESSION['final_order']);		
		echo '<ul>';
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
		echo '</ul>Обща сума на продуктите в кошницата: ' . $total_sum;

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
					if (isset($_SESSION['logged_in'])){
						display_user_name_funds();
					}

				?>						
			</div>
			<div id="content_bottom">
				<?php
					if(isset($_POST['tenergy_quantity']) && $_POST['tenergy_quantity'] > 0){
						add_value_to_final_order('Butterfly Tenergy 05', $_POST['tenergy_quantity'], '100');
					}
					if(isset($_POST['omega_quantity']) && $_POST['omega_quantity'] > 0){
						add_value_to_final_order('Xiom Omega Pro VII', $_POST['omega_quantity'], '90');
					}
					if(isset($_POST['new_impuls_quantity']) && $_POST['new_impuls_quantity'] > 0){
						add_value_to_final_order('Donic New Impuls 7.5', $_POST['new_impuls_quantity'], '180');
					}
					if(isset($_POST['lin_gaoyuan_quantity']) && $_POST['lin_gaoyuan_quantity'] > 0){
						add_value_to_final_order('Butterfly Lin Gaoyuan ALC', $_POST['lin_gaoyuan_quantity'], '340');
					}
					if(isset($_POST['joola_touch_quantity']) && $_POST['joola_touch_quantity'] > 0){
						add_value_to_final_order('Joola Touch', $_POST['joola_touch_quantity'], '200');
					}
					if(isset($_POST['joola_rally_quantity']) && $_POST['joola_rally_quantity'] > 0){
						add_value_to_final_order('Joola Rally', $_POST['joola_rally_quantity'], '190');
					}
					display_current_backet();					
				?>
				<form method="post" action="basket_out.php">
					<input type="submit" name="basket_out" value="Към кошницата">
				</form>
			</div>
		</div>
	</div>	
</body>
</html>