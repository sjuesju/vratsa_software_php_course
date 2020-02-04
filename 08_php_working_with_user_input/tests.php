<!DOCTYPE html>
<html>
<head>
	<title>Задачи за урок 9</title>
</head>
<body>
	<?php
	$user_info = [
		'name_first' => 'Pesho',
		'name_second' => 'Peshov',
		'name_third' => 'Ivanov',
		'age' => 35,
		'occupation' => 'worker',
	];
	
	echo '<ul><li>' . $user_info['name_first'] . '</li></ul>';
	?>
	<ul>
		<li><?php echo 'First name: ' . $user_info['name_first'] ?> </li>
		<li><?php echo 'Second name: ' . $user_info['name_second'] ?> </li>
		<li><?php echo 'Third name: ' .  $user_info['name_third'] ?> </li>
		<li><?php echo 'Age: ' .  $user_info['age'] ?> </li>
		<li><?php echo  'Occupation: ' . $user_info['occupation'] ?> </li>
	</ul>
	<?php
	echo '<p>';
	$phone_book = [
		'petar_ivanov' => '000000000',
		'radost_ivanova' => '111111111',
		'nia_ivanova' => '22222222222222',
		'petya_ivanova' => '33333333',
	];
	?>
	<ol>
		<li><?php echo 'Petar Ivanov phone number: ' .  $phone_book['petar_ivanov'] ?> </li>
		<li><?php echo 'Radost Ivanova phone number: ' .  $phone_book['radost_ivanova'] ?> </li>
		<li><?php echo 'Nia Ivanova phone number: ' .  $phone_book['nia_ivanova'] ?> </li>
		<li><?php echo 'Petya Ivanova phone number: ' .  $phone_book['petya_ivanova'] ?> </li>
	</ol>
	<?php 
	echo '<p>';
	$cities_postal_codes = [
		'vratsa' => '3000',
		'berkovitsa' => '3500',
		'blagoevgrad' => '2700',
		'vidin' => '3700',
	];
	echo "<table><thead><tr><th>City</th><th>Postal code</th></tr></thead><tbody><tr><td>Враца</td><td>" . $cities_postal_codes['vratsa'] . "</td><tr><td>Берковица</td><td>" . $cities_postal_codes['berkovitsa'] . "</td></tr><tr><td>Благоевград</td><td>" . $cities_postal_codes['blagoevgrad'] . "</td></tr><tr><td>Видин</td><td>" . $cities_postal_codes['vidin'] . "</td></tr></tbody></table>";
?>
<p><p>
	<form action="city.php" method="post">
		Име: <input type="text" name="name">
		Любим град: <input type="text" name="city">
		<input type="submit" name="submit">
	</form>

</body>
</html>

