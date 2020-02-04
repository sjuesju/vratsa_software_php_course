<?php
	$array = [
		"abc", 
		"def", 
 		"ghi"
];

// Първо всичките комбинации от двойки трябва да се изчислят 
	$count = sizeof($array);
	$needed_changes = 0;
	for ($i=1; $i < $count; $i++) { 
		$first_element_first = substr($array[$i - 1], 0, 1);
		$first_element_second = substr($array[$i - 1], -1, 1);		
		$second_element_first = substr($array[$i], 0, 1);
		$second_element_second = substr($array[$i], -1, 1);
		echo $array[$i - 1] . ': ' . $first_element_first . ' ' . $first_element_second . '|' . $array[$i] . ': ' . $second_element_first . ' ' . $second_element_second . '<p>';
	}
?>