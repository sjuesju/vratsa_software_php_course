<?php
	include ('../includes/header.php');
?>

<?php
	$rows = 10;
	$cols = 8;
	
	$value = 7;
	$array = [];
	for ($row=0; $row < $rows; $row++) { 
			$num = ($row + 1) * $value;
			for ($col=0; $col < $cols; $col++) { 
				$array[$row][$col] = $num;
				$num += 110;				
			}
		}
?>
		<pre><?php //var_dump($array); ?></pre>
<?php
	echo '<table border="1">';
	for ($row=0; $row < $rows; $row++) { 
		echo '<tr>';
		for ($col=0; $col < $cols; $col++) { 
			echo '<td>' . $array[$row][$col] . '</td>';
		}
		echo '</tr>';
	}
	echo '</table>';
?>

<?php
	include ('../includes/footer.php');
?>

