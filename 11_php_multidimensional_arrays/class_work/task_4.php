<!DOCTYPE html>
<html>
<head>
	<title>PHP 11 - Задача 1</title>
</head>
<body>
	<?php
		$arr = [];
		$m = 4;
		$n = 8;

		for ($i=0; $i < $m; $i++) { 
			$arr[$i] = [];
			for ($a=0; $a < $n; $a++) { 
				$arr[$i][$a] = 1;
			}
		}
		echo '<table border="1"';
		for ($row=0; $row < sizeof($arr); $row++) { 
			echo '<tr>';
			for ($col=0; $col < sizeof($arr[$row]); $col++) { 
				echo '<td>'; 
				echo $arr[$row][$col];
				echo '</td>';
			}
			echo '<tr>';
		}
		echo '</table';
	?>
</body>
</html>