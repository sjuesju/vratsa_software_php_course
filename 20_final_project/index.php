<?php
	function substring_first_last_char($array){
		$final_array = array();
		$count = sizeof($array);
		for ($i=0; $i < $count; $i++) { 
			$final_array[$i] = substr($array[$i], 0, 1) . substr($array[$i], -1, 1);
		}
		return $final_array;
	}

	function get_all_combinations($array){
		$final_array = array();
		$count = sizeof($array);
		for ($i=1; $i < $count; $i++) { 
			array_push($final_array, $array[$i - 1] . $array[$i]);
		}
		return $final_array;
	}

	function pc_permute($items, $perms = array()){ 
		$final_array = array();
		if (empty($items)){ 
			array_push($final_array, $perms);
		} else{ 
			for ($i = count($items) - 1; $i >= 0; --$i) { 
				$newitems = $items; 
				$newperms = $perms; 
				list($foo) = array_splice($newitems, $i, 1); 
				array_unshift($newperms, $foo); 
				pc_permute($newitems, $newperms); 
			} 
		} 
		var_dump($final_array);
		echo '<p>';
		return $final_array;
	}
// https://docstore.mik.ua/orelly/webprog/pcook/ch04_26.htm#phpckbk-CHP-4-EX-7

	$array = [
		"abc", 
		"def", 
 		"ghi",
 		"p"
];

// Първо събирам всички комбинации в един масив
// Второ правя нов масив, който да подреди двойките във всичи възможни комбинации, така че да проверя дали мога с по-малко промени да изпълня желаното условие
	$two_elements_array = substring_first_last_char($array);
	$four_letters_array = get_all_combinations($two_elements_array);
	$final_array = pc_permute($four_letters_array);
	var_dump($final_array);
	/*$count = sizeof($array);
	$needed_changes = 0;
	for ($i=1; $i < $count; $i++) { 
		$first_element_first = substr($array[$i - 1], 0, 1);
		$first_element_second = substr($array[$i - 1], -1, 1);		
		$second_element_first = substr($array[$i], 0, 1);
		$second_element_second = substr($array[$i], -1, 1);
		echo $array[$i - 1] . ': ' . $first_element_first . ' ' . $first_element_second . '|' . $array[$i] . ': ' . $second_element_first . ' ' . $second_element_second . '<p>';
	}*/
?>