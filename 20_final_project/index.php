<?php

function backwards_check($needed_changes, $array, $start_num){
	$count = sizeof($array);
	for ($i=$start_num; $i > 0 ; $i--) { 
		$first_char = $array[$i][0];
		$last_char = $array[$i - 1][strlen($array[$i - 1]) - 1];

		if ($first_char != $last_char){
			$needed_changes++;
			if ($i < $count - 1){
				if (strlen($array[$i - 1]) == 1){
					$array[$i - 1] = $first_char;
				} else {
					if ($first_char == $array[$i-1][0]){
						$array[$i - 1][strlen($array[$i - 1]) - 1] = $first_char;
					} else {
						$array[$i][0] = $last_char;
					}
				}				
			} else {
				$array[$i][0] = $last_char;
			}		
		}
	}	 
	return array($needed_changes, $array);
}

function forward_check ($needed_changes, $array, $start_num){
	$count = sizeof($array);
	for ($i = $start_num; $i < $count; $i++) { 
		$first_char = $array[$i][0];
		$last_char = $array[$i - 1][strlen($array[$i - 1]) - 1];

		if ($first_char != $last_char){
			$needed_changes++;
			if ($i < $count - 1){
				if (strlen($array[$i - 1]) == 1){
					$array[$i][0] = $last_char;
				} else {
					if ($first_char == $array[$i+1][0]){
					$array[$i - 1][strlen($array[$i - 1]) - 1] = $first_char;
					} else {
						$array[$i][0] = $last_char;
					}
				}				
			} else {
				$array[$i][0] = $last_char;
			}		
		}
	}	 
	return array($needed_changes, $array);
}
	$array = [
	"n", 
 "b", 
 "v", 
 "v", 
 "f", 
 "tygtb", 
 "pyfluoh", 
 "hxmlrihac", 
 "fvqf", 
 "jqx", 
 "l"
];	

$final_array = backwards_check(0, $array, sizeof($array) - 1);
var_dump($array);
echo '<p>';
var_dump($final_array[1]);
echo '<p>';
echo $final_array[0];
	// var_dump($array);
	// echo '<p>';
	// $needed_changes = 0;
	// $count = sizeof($array);
	// for ($i=1; $i < $count; $i++) { 
	// 	$first_char = $array[$i][0];
	// 	$last_char = $array[$i - 1][strlen($array[$i - 1]) - 1];

	// 	if ($first_char != $last_char){
	// 		$needed_changes++;
	// 		if ($i < $count - 1){
	// 			if (strlen($array[$i - 1]) == 1){
	// 				$array[$i][0] = $last_char;
	// 			} else {
	// 				if ($first_char == $array[$i+1][0]){
	// 				$array[$i - 1][strlen($array[$i - 1]) - 1] = $first_char;
	// 				} else {
	// 					$array[$i][0] = $last_char;
	// 				}
	// 			}				
	// 		} else {
	// 			$array[$i][0] = $last_char;
	// 		}		
	// 	}
	// }
	// echo '<p>';
	// echo $needed_changes;
	// echo '<p>';
	// var_dump($array);
?>