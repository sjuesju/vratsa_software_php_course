<?php
	include ('../includes/header.php');
?>

<?php
	$array = [
		["name" => 'Petar', "junk_food" => 10, 'drinks' => 10, 'computer' => 0, 'sport' => 10],
		["name" => 'Ivan', "junk_food" => 2, 'drinks' => 20, 'computer' => 20, 'sport' => 20],
		["name" => 'Georgi', "junk_food" => 20, 'drinks' => 15, 'computer' => 10, 'sport' => 5],
		["name" => 'Stoian', "junk_food" => 5, 'drinks' => 0, 'computer' => 5, 'sport' => 40],
		["name" => 'Misho', "junk_food" => 15, 'drinks' => 39, 'computer' => 15, 'sport' => 1],
	];
	$num = 0;
	$sum_r = 0;
	$min_r = 1000;
	$min_r_name = '';
	foreach ($array as $value) {
		$array[$num]["R"] = ((($value["junk_food"] + $value["drinks"]) * ($value["junk_food"] + $value["drinks"])) + $value["computer"] * 2) / $value["sport"];		
		$sum_r += $array[$num]["R"];
		if ($min_r > $array[$num]["R"]){
			$min_r = $array[$num]["R"];
			$min_r_name = $array[$num]["name"];
		}
		$num++;
	}
	$avg_r = $sum_r / sizeof($array);
	
	echo'<table><tr><td>Name</td><td>JF</td><td>D</td><td>C</td><td>S</td><td>R</td></tr>';
	for ($i=0; $i < sizeof($array); $i++) { 
		echo '<tr>';
		foreach ($array[$i] as $value) {
			echo '<td>' . $value . '</td>';
		}
		echo '</tr>';		
	}
	echo '</table>';
	echo $min_r_name . ' with ' . $min_r . '<br>';
	echo 'Average R: ' . $avg_r;
?>

<?php
	include ('../includes/footer.php');
?>

