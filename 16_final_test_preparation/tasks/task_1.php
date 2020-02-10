<?php
	include ('../includes/header.php');
?>
<form method="post" action="calculate_fuel_consumption.php">
	Добавете изхарчено гориво <input type="text" name="consumption">
	Изберете допълнително условие
	<select name="condition">
		<option value="5">Снежна покривка</option>
		<option value="50">Улично задръстване</option>
		<option value="20">Участък с много завои</option>
		<option value="-10">Магистрала</option>
	</select>
	<input type="submit" name="submit" value="Изчисли">
</form>

<?php
	include ('../includes/footer.php');
?>

