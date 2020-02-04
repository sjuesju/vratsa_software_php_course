<!DOCTYPE html>
<html>
<head>
	<title>PHP 11 - Задача 5</title>
</head>
<body>
	<?php
		$arr = [];
		$m = 4;
		$n = 5;
		$element = 1;
		for ($i=0; $i < $m; $i++) { 
			$arr[$i] = [];
			for ($a=0; $a < $n; $a++) { 
				$arr[$i][$a] = $element;
				$element++;
			}
		}
		echo '<span style="float:left; margin-right:10px">'; 
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
		echo '</table>';
		echo '</span>';
		echo '<span style="float:left; margin-right:10px">'; 
		echo '<table border="1"';
		for ($row=sizeof($arr) - 1; $row >= 0; $row--) { 
			echo '<tr>';
			for ($col=sizeof($arr[$row]) - 1; $col >= 0 ; $col--) { 
				echo '<td>'; 
				echo $arr[$row][$col];
				echo '</td>';
			}
			echo '<tr>';
		}
		echo '</table>';
		echo '</span>';

		$element = 1;
		for ($i=0; $i < $m; $i++) { 
			$arr[$i] = [];
			for ($a=0; $a < $n; $a++) { 
				$arr[$i][$a] = $element;
				$element += 2;
			}
		}

		echo '<span style="float:left; margin-right:10px">'; 
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
		echo '</table>';
		echo '</span>';

		$m = 4;
		$n = 4;
		$element = 1;
		for ($i=0; $i < $m; $i++) { 
			$arr[$i] = [];
			for ($a=0; $a < $n; $a++) { 
				$final_element = 
				$arr[$i][$a] = $element;
				# 1, 2, 3 , 4
				# 9, 10, 11, 12
				$element++;
			}
			$element *= 2;
			$element--;
		}

		echo '<span style="float:left; margin-right:10px">'; 
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
		echo '</table>';
		echo '</span>';
		$element = 2;
		for ($i=0; $i < $m; $i++) { 
			$arr[$i] = [];
			for ($a=0; $a < $n; $a++) { 
				$final_element = 
				$arr[$i][$a] = $element;
				$element += 2;
			}
			$element += 20;
			$element -= 2;
		}


		echo '<span style="float:left; margin-right:10px">'; 
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
		echo '</table>';
		echo '</span>';

		$element = 1;
		for ($i=0; $i < $m; $i++) { 
			$arr[$i] = [];
			for ($a=0; $a < $n; $a++) { 
				$arr[$i][$a] = $element;
				$element ++;
			}
			$element--;
			$element *= 10;
			$element++;
		}

		echo '<span style="float:left; margin-right:10px">'; 
		echo '<table border="1"';
		for ($row=0; $row < sizeof($arr); $row++) { 
			echo '<tr>';
			for ($col=0; $col < sizeof($arr[$row]); $col++) { 
				echo '<td>'; 
				echo $arr[$col][$row];
				echo '</td>';
			}
			echo '<tr>';
		}
		echo '</table>';
		echo '</span>';
		
		for ($i=0; $i < $m; $i++) { 
			$arr[$i] = [];
			$element = 1;
			for ($a=0; $a < $n; $a++) { 
				$arr[$i][$a] = $element;
				$element ++;
			}
		}
		echo '<span style="float:left; margin-right:10px">'; 
		echo '<table border="1"';
		$start = 0;
		for ($row=0; $row < sizeof($arr); $row++) { 
			echo '<tr>';
			for ($i=0; $i < $start; $i++) { 
				echo '<td>'; 
				echo '0';
				echo '</td>';
			}
			for ($col=0; $col < sizeof($arr[$row]) - $start; $col++) { 
				echo '<td>'; 
				echo $arr[$row][$col];
				echo '</td>';
			}
			echo '<tr>';
			$start++;
		}
		echo '</table>';
		echo '</span>';
		
		echo '<p>';
		$n = 5;
		$m = 4;

		$element = 3;
		for ($i=0; $i < $m; $i++) { 
			$arr[$i] = [];
			for ($a=0; $a < $n; $a++) { 
				$arr[$i][$a] = $element;
				$element+= 2;
			}
			$element = $element * 2 - 2;
		}

		echo '<span style="float:left; margin-right:10px">'; 
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
		echo '</table>';
		echo '</span>';

		$n = 5;
		$m = 4;

		$element = 1;
		for ($i=0; $i < $m; $i++) { 
			$arr[$i] = [];
			for ($a=0; $a < $n; $a++) { 
				$arr[$i][$a] = $element;
				$element += 3;
			}
		}

			
		echo '<span style="float:left; margin-right:10px">'; 
		echo '<table border="1"';
		for ($row=0; $row < $n; $row++) { 
			echo '<tr>';
			for ($col=0; $col < $m; $col++) { 
				echo '<td>'; 
				echo $arr[$col][$row];
				echo '</td>';
			}
			echo '<tr>';
		}
		echo '</table>';
		echo '</span>';

		$n = 4;
		$m = 4;

		$element = 1;
		for ($i=0; $i < $m; $i++) { 
			$arr[$i] = [];
			for ($a=0; $a < $n; $a++) { 
				$arr[$i][$a] = $element;
				$element++;
			}
		}

			
		echo '<span style="float:left; margin-right:10px">'; 
		echo '<table border="1"';
		for ($row=0; $row < $n; $row++) { 
			echo '<tr>';
			$position = 0;
			for ($col=0; $col < $m; $col++) { 
				echo '<td>'; 
				echo $arr[$row][$col];
				echo '</td>';
				$position = $col;
			}
			echo '</tr>';
			$row++;
			echo '<tr>';
			for ($position; $position >= 0; $position--) {
				echo '<td>'; 
				echo $arr[$row][$position];
				echo '</td>';
			}
			echo '</tr>';
		}
		echo '</table>';
		echo '</span>';

		$n = 5;
		$m = 5;

		$element = 1;
		for ($i=0; $i < $m; $i++) { 
			$arr[$i] = [];
			for ($a=0; $a < $n; $a++) { 
				$arr[$i][$a] = $element;
				$element++;
			}
		}
		echo '<span style="float:left; margin-right:10px">'; 
		echo '<table border="1"';
		for ($row=$n - 1; $row >= 0; $row--) { 
			echo '<tr>';
			for ($col=$m - 1; $col >= 0; $col--) { 
				echo '<td>'; 
				echo $arr[$col][$row];
				echo '</td>';
			}
			echo '<tr>';
		}
		echo '</table>';
		echo '</span>';
	?>
</body>
</html>