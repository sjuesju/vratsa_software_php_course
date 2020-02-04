<?php
//My number
$my_number = 5;
//First way
echo "<h2>First way</h2> <p></p>";
if(!empty($_POST['number'])){
	$number = $_POST['number'];
	echo 'Your number is:' . ' ' . $number . '<p></p>';

	if($number == $my_number){
		echo 'My number is:' .  ' ' . $number;
	}
	elseif ($number > $my_number){
		echo 'My number is lower!';
	}
	elseif ($number < $my_number){
		echo 'My number is bigger!';
	}
}
else{
	echo 'Please enter number!!!';
}
echo "<h2>Second way</h2> <p></p>";
if (!empty($_POST['number'])){
	$number = $_POST['number'];
	echo 'Your number is:' . ' ' . $number . '<p></p>';
	
	switch($number){
		case $number == $my_number:
		echo 'My number is:' .  ' ' . $number;
		break;
		
		case $number > $my_number:
		echo 'My number is lower!';
		break;
		
		case $number < $my_number:
		echo 'My number is bigger!';
		break;
	}
}
else{
	echo 'Please enter number!!!';
}