<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		$array = [
			"Sophia"=>"31",
			"Jacob"=>"41",
			"William"=>"39",
			"Ramesh"=>"40",
		];

		foreach ($array as $key => $value) {
			echo  $key . '<br>';
		}

		echo '<p>';
		foreach ($array as $key) {
			echo  $key . '<br>';
		}
		echo '<p>';
		echo 'Задача 2';
		echo '<p>';
		$array = [7, 'n', 8];
		$result = 1;
		if (empty($array)){
			echo "Not valid";
		} else {
			foreach ($array as $value) {
				if (is_numeric($value)){
					$result *= $value;
				} else {
					$result = "Not valid";
					break;
				}
			}
			echo $result;
		}
		echo '<p>';
		echo 'Задача 3';
		echo '<p>';
		$array = [8000, '8', 34];
		$result = $array[0];
		if (empty($array)){
			echo "Not valid";
		} else {
			foreach ($array as $value) {
				if (is_numeric($value)){
					if ($value > $result){
						$result = $value;
					}
				} else {
					$result = "Not valid";
					break;
				}
			}
			echo $result;
		}
	?>
</body>
</html>
