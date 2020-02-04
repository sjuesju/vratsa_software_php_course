<!DOCTYPE html>
<html>
<head>
	<title>Task 3</title>
</head>
<body>
	<form action="task3.php" method="post">
		<select name="day">
			<option value="Monday">Monday</option>
			<option value="Tuesday">Tuesday</option>
			<option value="Wednesday">Wednesday</option>
			<option value="Thursday">Thurdsay</option>
			<option value="Friday">Friday</option>
			<option value="Saturday">Saturday</option>
			<option value="Sunday">Sunday</option>
		</select>
		<input type="submit" name="submit">
	</form>
	<p></p>
	<?php
	if (!empty($_POST['day'])) {
		$day = $_POST['day'];
		switch ($day) {
			case 'Monday':
			echo "Laugh on Monday, laugh for danger.";
			break;
		
			case 'Tuesday':
			echo "Laugh on Tuesday, kiss a stranger.";
			break;

			case 'Wednesday':
			echo "Laugh on Wednesday, laugh for a letter.";
			break;

			case 'Thursday':
			echo "Laugh on Thursday, something better.";
			break;

			case 'Friday':
			echo "Laugh on Friday, laugh for sorrow.";
			break;

			case 'Saturday':
			echo "Laugh on Saturday, joy tomorrow.";
			break;

			case 'Sunday':
			echo "No poem line for Sunday.";
			break;
				
		}
	}
	else{
		echo "Please chose a day!!!";
	}
	?>
</body>
</html>