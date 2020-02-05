<!DOCTYPE html>
<html>
<head>
	<title>Products</title>
	<style type="text/css">
		div{
			display: inline-table;
			border: 2px solid #000;
			margin: 20px;
			padding: 20px;
			border-radius: 50%;
		}
	</style>
</head>
<body>
	<form action="cart.php" method="post">
		<div>
			<h3>Часовник 1</h3>
			<input type="checkbox" name="clock[1][buy]" value="1">
			<input type="text" name="clock[1][pieces]">
			<input type="hidden" name="clock[1][name]" value="Часовник 1">
			<input type="hidden" name="clock[1][price]" value="20">
			<br>
		</div>
		<div>
			<h3>Часовник 2</h3>
			<input type="checkbox" name="clock[2][buy]" value="2">
			<input type="text" name="clock[2][pieces]">
			<input type="hidden" name="clock[2][name]" value="Часовник 2">
			<input type="hidden" name="clock[2][price]" value="30">
			<br>
			
		</div>
		<div>
			<h3>Часовник 3</h3>
			<input type="checkbox" name="clock[3][buy]" value="3">
			<input type="text" name="clock[3][pieces]">
			<input type="hidden" name="clock[3][name]" value="Часовник 3">
			<input type="hidden" name="clock[3][price]" value="40">
			<br>
		</div>
		<div>
			<h3>Часовник 4</h3>
			<input type="checkbox" name="clock[4][buy]" value="4">
			<input type="text" name="clock[4][pieces]">
			<input type="hidden" name="clock[4][name]" value="Часовник 4">
			<input type="hidden" name="clock[4][price]" value="50">
			<br>
		</div>
		<div>
			<h3>Часовник 5</h3>
			<input type="checkbox" name="clock[5][buy]" value="5">
			<input type="text" name="clock[5][pieces]">
			<input type="hidden" name="clock[5][name]" value="Часовник 5">
			<input type="hidden" name="clock[5][price]" value="60">
		</div>
			<br>
			<input type="submit" name="submit" value="Добави">
		</div>
	</form>
</body>
