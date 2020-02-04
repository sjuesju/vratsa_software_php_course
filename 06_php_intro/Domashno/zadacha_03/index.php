<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Current Time</title>	
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<p>Current time in Bulgaria: 
			<?php
				$dt = new DateTime("now", new DateTimeZone('Europe/Sofia'));				
				echo $dt->format('m/d/Y, H:i:s')
			?>
		</p>
		<p>Current time in Australia: 
			<?php
				$dt = new DateTime("now", new DateTimeZone('Australia/Adelaide'));				
				echo $dt->format('m/d/Y, H:i:s')
			?>
		</p>
	</body>
</html>