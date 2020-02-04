<!DOCTYPE html>
<html lang="bg-Bg">
<head>
	<title>PHP Conditionals - Задача 3</title>
	<link rel="stylesheet" type="text/css" href="../styles/style.css">
</head>
<body>
	<div id="container">
		<div id="home">
			<h3><a href="..\index.php">ОБРАТНО</a></h3>
		</div>
		<div id="header">
			<h1>Задача 3</h1>
			<h4>Да се напише програма, при която да изискаме от потребителя да въведе или избере ден от седмицата на английски език. В зависимост от това, да се появява ред от поема, съдържащ ден от седмицата. </h4> 
		</div>
		<div id="header_bottom_dot">
		</div>
		<div id="task_field">
			<form method="post" action="task_3_action.php">
				<fieldset id="text_fieldset">
					<legend>Изберете ден от седмицата</legend>
					<select name="week_day">
						<option value="Monday">Monday</option>
						<option value="Tuesday">Tuesday</option>
						<option value="Wednesday">Wednesday</option>
						<option value="Thursday">Thursday</option>
						<option value="Friday">Friday</option>
						<option value="Saturday">Saturday</option>
					</select>
					<input type="submit" id="submit" name="submit" value="Избери">
				</fieldset>
			</form>
		</div>		
		<div id="footer">
		</div>
	</div>	
</body>
</html>