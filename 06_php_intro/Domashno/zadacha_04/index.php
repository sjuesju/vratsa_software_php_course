<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Random Number</title>	
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<p>Random number between -100 and 100: 
			<?php
				echo rand(-100, 100);
			?>
		</p>		
	</body>
</html>