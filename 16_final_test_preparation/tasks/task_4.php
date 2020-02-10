<?php
	include ('../includes/header.php');
?>

<?php
	$rows = 20;
	$cols = 20;
	
	$index = $cols-1;
	$array = [];
	for ($row = 0; $row < $rows; $row++) { 
			for ($col= 0; $col < $cols; $col++) { 
				if ($col == $index){
					$array[$row][$col] = '0';
					$index--;
				} else {
					$array[$row][$col] = '-';
				}			
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

