<!DOCTYPE html>
<html>
<head>
	<title>While задача 1</title>
</head>
<body>
	<form method="post">
		<input type="numeric" name="number">
		<input type="submit" name="submit">
	</form>
	<?php
		if (isset($_POST['number'])){
			$x = 1;
			$is_result = false;
			$result = '';
			$a = 'a';
			while ($x <= $_POST['number']) {
				echo $a . '<br>';
				$a .= 'a';
				if ($x % 3 == 0 && $x % 7 == 0){
					$is_result .= $x . '<br>';
				}
				$x++;
			}
			if ($result == ''){
				echo 'No such numbers';
			} else {
				echo $result; 
			}
		}			
	?>
</body>
</html>
