<?php
function check_with_single_letters($array, $needed_changes){
	for ($i=1; $i < sizeof($array); $i++) { 		
		if (strlen($array[$i]) == 1){
			// Целта е да взема целия рейндж от думи с една буква. След това гледам кои са най-често повтарящите се букви в този рейндж и замествам с тях останалите
			$one_letters = array();
			$start_num = $i - 1; // ползвам тази променлива за смяната на буквите след като установя коя е най-повтарящата се
			array_push($one_letters, $array[$i - 1][strlen($array[$i - 1]) - 1]);
			// влизам във вложен цикъл, който да вземе всички от съответния рейндж
			while (true) {
				if (strlen($array[$i]) != 1){
					array_push($one_letters, $array[$i][0]);					
					break;
				} elseif ($i == sizeof($array) - 1){
					array_push($one_letters, $array[$i][strlen($array[$i]) - 1]);
					break;
				}else {
					array_push($one_letters, $array[$i][strlen($array[$i]) - 1]);
					$i++;
				}				
			}
			$most_occured = calculate_letter_with_most_occurances($one_letters);			
			$final_array = make_changes_in_one_letter_array($array, $start_num, $i, $most_occured, $needed_changes);	
			$needed_changes = $final_array[0];
			$array = $final_array[1];
		} else {
			if ($array[$i - 1][strlen($array[$i - 1]) - 1] != $array[$i][0]){
				 $array[$i][0] = $array[$i - 1][strlen($array[$i - 1]) - 1]; 
				 $needed_changes++;

			}
		}
	}
	return array($needed_changes, $array);
}

function make_changes_in_one_letter_array($array, $start_num, $end_num, $most_occured, $needed_changes){
	for ($i=$start_num; $i <= $end_num; $i++) { 
		if ($i == $end_num){
			if ($array[$i][0] != $most_occured){
				$needed_changes++;
				$array[$i][0] = $most_occured;
			}
		} else {
			if ($array[$i][strlen($array[$i]) - 1] != $most_occured){
				$needed_changes++;
				$array[$i][strlen($array[$i]) - 1] = $most_occured;
			}
		}
	}
	return array($needed_changes, $array);
}

function calculate_letter_with_most_occurances($one_letters){
	$occurances = array();
	for ($i=0; $i < sizeof($one_letters); $i++) { 
		if (array_key_exists($one_letters[$i], $occurances)){ 
        	$occurances[$one_letters[$i]]++;
   		 } else{ 
        	$occurances[$one_letters[$i]] = 1;
    	} 
	}
	arsort($occurances);
	foreach ($occurances as $key => $value) {
		return $key;
	}	
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

var_dump($array);
echo '<p>';
$final_array = check_with_single_letters($array, 0);
var_dump($final_array[1]);
echo '<p>';
echo $final_array[0];
?>