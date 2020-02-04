<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Triangle</title>	
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<form  method="post" action="calculate.php">
			<fieldset>
				<legend>Add triangle values</legend>
				<div id="point_a">
					<span><label for="point_a_x">Point Ax: <input type="text" name="point_a_x"></label></span>
					<span><label for="point_a_y">Point Ay: <input type="text" name="point_a_y"></label></span>
				</div>
				<div id="point_b">
					<span><label for="point_b_x">Point Bx: <input type="text" name="point_b_x"></label></span>
					<span><label for="point_b_y">Point By: <input type="text" name="point_b_y"></label></span>
				</div>
				<div id="point_c">
					<span><label for="point_c_x">Point Cx: <input type="text" name="point_c_x"></label></span>
					<span><label for="point_c_y">Point Cy: <input type="text" name="point_c_y"></label></span>
				</div>
				<input type="submit" name="submit" id="submit" value="Calculate">					
			</fieldset>				
		</form>
	</body>
</html>