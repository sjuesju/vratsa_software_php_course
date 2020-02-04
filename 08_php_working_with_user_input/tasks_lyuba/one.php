

<?php

	if( !empty($_POST) ){

	$num = $_POST['num'];
	$game_number = rand(0, 10);

	if( ($num) == $game_number ){

		echo 'Correct answer!'; 

	} 

	if( ($num) > $game_number){

		echo 'Number is < than ' . $game_number ;

	} 

	if( ($num) < $game_number){

		echo 'Number is > than ' . $game_number;

	}

	}

?>

<!DOCTYPE html>

<html lang="en">

<head>

	<meta charset="utf-8">

	<title>Document</title>

	<style>

		h3 {

			color: #a82006;

		}

​

	</style>

</head>

	

	<body>

		<form action="one.php" method="post">

			<h3>What is the number?</h3>

			Number is:

			<input type="text" name="num">

			<input type="submit" name="submit" value="Изпращане">

		</form>

	</body>

</html>

