<!DOCTYPE html>
<html>
<head>
	<title>PHP 11 - Задача 1</title>
</head>
<body>
	<?php
		$cars = [
			"Volvo" => ["brand" => "Volvo", "model" => "v40", "price" => 24392],
			"BMW" => ["brand" => "BMW", "model" => "M240i Coupe", "price" => 33229],
			"Reno" => ["brand" => "Reno", "model" => "Megan", "price" => 13984],
		];
		
		foreach ($cars["Volvo"] as $key => $value) {
			echo $key . ': ' . $value . '<br>';
		}
		echo '<p>';
		foreach ($cars as $key => $value) {
			foreach ($value as $brand => $brand_value) {
				echo $brand_value . ', ';
			}
			echo '<br>';
		}
		echo '<p>';
		echo '<table border=1><thead><tr><th>Brand</td><th>Model</th><th>Price</th></tr></thead>';
		$price_average = 0;
		foreach ($cars as $key => $value) {
			echo '<tr>';
			foreach ($value as $brand => $brand_value) {
				echo '<td>' . $brand_value . '</td>';
			}
			echo '</tr>';
			$price_average += $value['price'];
		}
		echo '</table>';
		echo '<br>';
		echo 'Average price: ' . round(($price_average / sizeof($cars)), 2);
	?>
</body>
</html>