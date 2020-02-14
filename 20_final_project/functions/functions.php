<?php
function add_array_values_to_explanations($array){
	$explanations = '';
	for ($pos=0; $pos < sizeof($array); $pos++) { 
			if ($pos == sizeof($array) - 1){
				$explanations .= $array[$pos] . '</li>';
			} else {
				$explanations .= $array[$pos] . ', ';
			}
		}	
		return $explanations;
}

function check_with_single_letters($array, $needed_changes){
	$explanations = '<ul><li>Влизам в масива от позиция едно, като така мога да проверявам стъпка назад, без притеснения, че ще изляза от масива</li>';
	for ($i=1; $i < sizeof($array); $i++) { 		
		if (strlen($array[$i]) == 1){
			$explanations .= '<li>Елементът на позиция ' . $i . ' е с дължина един символ и затова влизам във вложен масив. С него мога да проверя колко поред елементи са с дължина един символ. Важно е да се вземе и последната буква от стринга на позиция ' . ($i - 1) . ': "' . $array[$i-1] . '", тъй като той също ще участва в изчислението на най-често повтарящите се символи във вложения масив</li>';
			// Целта е да взема целия рейндж от думи с една буква. След това гледам кои са най-често повтарящите се букви в този рейндж и замествам с тях останалите
			$one_letters = array();
			$start_num = $i - 1; // ползвам тази променлива за смяната на буквите след като установя коя е най-повтарящата се
			array_push($one_letters, $array[$i - 1][strlen($array[$i - 1]) - 1]);
			// влизам във вложен цикъл, който да вземе всички от съответния рейндж
			while (true) {
				if (strlen($array[$i]) != 1){
					array_push($one_letters, $array[$i][0]);
					$explanations .= '<li>Елементът на позиция ' . $i . ': "' .$array[$i] . '" е с дължина по-голяма от 1, заради което излизам от вложения цикъл. Важно е да се вземе първата буква на елемента "' . $array[$i] . '", тъй като също ще участва в изчислението на най-често повтарящите се символи във вложения масив</li><li>Полученият еднобуквен масив е: ';			
						$explanations .= add_array_values_to_explanations($one_letters);
					break;
				} elseif ($i == sizeof($array) - 1){
					array_push($one_letters, $array[$i][strlen($array[$i]) - 1]);
					$explanations .= '<li>Достигнат е краят на основния масив, заради което излизам и от вложения цикъл. Важно е да се вземе първата буква на елемента "' . $array[$i] . '", тъй като също ще участва в изчислението на най-често повтарящите се символи във вложения масив</li><li>Полученият еднобуквен масив е ';
						$explanations .= add_array_values_to_explanations($one_letters);
					break;
				}else {
					array_push($one_letters, $array[$i][strlen($array[$i]) - 1]);
					$i++;
				}				
			}			
			$most_occured = calculate_letter_with_most_occurances($one_letters);
			$explanations .= '<li>След излизането от вложения масив, изчислявам най-често повтарящата се буква в него. В конкретния случай е "' . $most_occured . '"</li>';		
			$final_array = make_changes_in_one_letter_array($array, $start_num, $i, $most_occured, $needed_changes);
			$explanations .= '<li>Навсякъде във вложения масив, където не присъства най-често повтарящата се буква, заменям с нея. Също така, с всяка промяна увеличавам и стойността на променливата за броя на извършените промени</li>';
			$needed_changes = $final_array[0];
			$array = $final_array[1];
			$explanations .= '<li>Като последна операция по вложения цикъл, презаписвам основния масив с вече променения такъв. Така текущият масив е: ';
			$explanations .= add_array_values_to_explanations($array);
		} else {
			$explanations .= '<li>Тъй като елементът на позиция ' . $i. ': "' . $array[$i] . '" е с повече от една буква, то единствено проверявам дали последната буква на предходния елемент е равна на първата на текущия</li>';
			if ($array[$i - 1][strlen($array[$i - 1]) - 1] != $array[$i][0]){
				 $array[$i][0] = $array[$i - 1][strlen($array[$i - 1]) - 1]; 
				 $needed_changes++;
				 $explanations .= '<li>Първата и последната буква са различни и затова променям първата да е равна на последната. Увеличавам с едно и променливата за броя на извършените промени</li>';
			} else {
				 $explanations .= '<li>Първата и последната буква са еднакви и не правя нищо</li>';
			}
		}
	}
	$explanations .= '</ul>';
	return array($needed_changes, $array, $explanations);
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

function print_array($array){
	 	$count = sizeof($array);
	 	for ($i=0; $i < $count; $i++) { 
	 		if ($i == $count - 1){
	 			echo $array[$i];
	 		} else {
	 			echo $array[$i] . ', ';
	 		}
		}
	 }
?>