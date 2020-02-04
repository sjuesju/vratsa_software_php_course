<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Triangle</title>	
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<?php
			$is_ok = true;					
			if (isset($_POST["submit"])){
				$triangleData = array();
				if (isset($_POST['point_a_x']) && strlen(htmlspecialchars($_POST['point_a_x'])) > 0 && is_numeric($_POST['point_a_x']) == true){
					$new = array_push($triangleData, $_POST['point_a_x']);
				} else { 
					$is_ok = false;
				}
				if (isset($_POST['point_a_y']) && strlen(htmlspecialchars($_POST['point_a_y'])) > 0 && is_numeric($_POST['point_a_y']) == true){
					$new = array_push($triangleData, $_POST['point_a_y']);
				} else { 
					$is_ok = false;
				}
				if (isset($_POST['point_b_x']) && strlen(htmlspecialchars($_POST['point_b_x'])) > 0 && is_numeric($_POST['point_b_x']) == true){
					$new = array_push($triangleData, $_POST['point_b_x']);
				} else { 
					$is_ok = false;
				}
				if (isset($_POST['point_b_y']) && strlen(htmlspecialchars($_POST['point_b_y'])) > 0 && is_numeric($_POST['point_b_y']) == true){
					$new = array_push($triangleData, $_POST['point_b_y']);
				} else { 
					$is_ok = false;
				}
				if (isset($_POST['point_c_x']) && strlen(htmlspecialchars($_POST['point_c_x'])) > 0 && is_numeric($_POST['point_c_x']) == true){
					$new = array_push($triangleData, $_POST['point_c_x']);
				} else { 
					$is_ok = false;
				}
				if (isset($_POST['point_c_y']) && strlen(htmlspecialchars($_POST['point_c_y'])) > 0 && is_numeric($_POST['point_c_y']) == true){
					$new = array_push($triangleData, $_POST['point_c_y']);
				} else { 
					$is_ok = false;
				}
				if ($is_ok === true){
					$result = ($triangleData[0] * ($triangleData[3] - $triangleData[5]) + $triangleData[2] *($triangleData[5] - $triangleData[1]) + $triangleData[4] * ($triangleData[1] - $triangleData[3])) / 2;
					if ($result < 0){
						$result = $result * -1;
					}							
					echo "The result is ($triangleData[0] * ($triangleData[3] - $triangleData[5]) + $triangleData[2] *($triangleData[5] - $triangleData[1]) + $triangleData[4] * ($triangleData[1] - $triangleData[3])) / 2 = " . round($result, 0);

				} else {
					echo "Incorrect data";
				}
			}
		?>	
		<p><button onclick="history.go(-1);">Back</button></p>
	</body>
</html>