<!DOCTYPE html>
<html>
<head>
	<title>Изчислете данъците си</title>
</head>
<body>
	<form method="post">
		Въведете вашата брутна заплата: <input type="number" name="salary">
		<input type="submit" name="submit" value="Изчислете">
	</form>
	<p>
		<?php
			if (!empty($_POST) && !empty($_POST['salary'])){
				$salary = $_POST['salary'];
				$doo = $salary / 100 * 8.38;
				$dzpo = $salary / 100 * 2.2;
				$health_ins = $salary / 100 * 3.2;
				$ddfl = $salary / 10;
				echo '<table><thead></thead><tr><th>Индекс</th><th>Сума</th></tr><tbody><tr><td>Основна заплата: </td><td>' . $salary . '</td></tr><tr><td>ДОО: </td><td>' . $doo . '</td></tr><tr><td>ДЗПО: </td><td>' . $dzpo . '</td></tr><tr><td>Здравни осигуровки: </td><td>' . $health_ins . '</td></tr><tr><td>ДДФЛ: </td><td>' . $ddfl . '</td></tr><tr><td>Нетна заплата: </td><td>' . ($salary - $doo - $dzpo - $health_ins - $ddfl) . '</td></tr></tbody></table>';
			}
		?>
</body>
</html>