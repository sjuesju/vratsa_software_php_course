<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Hello World!</title>	
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<?php
			echo 'Hello World';
			$name = "Gosho";
			$height = 200;
			$float_height = 200.01;
			$is_true = true;
			?>
		<p>
			<?php
				var_dump($name);
			?>
		<p>
			<?php
				var_dump($height);
			?>
		<p>
			<?php
				var_dump($float_height);
			?>
		<p>
			<?php
				var_dump($is_true);
			?>
		<p>
			<?php
				echo 'The variable $name is a' . gettype($name);
			?>
		<p>
			<?php			
				$a = 5;
				$b = 10;
				echo 'а = ' . $a . ', b = ' . $b;
			?>
		<nbsp>
			<?php
				$c = $a; 
				$a = $b;
				$b = $c;
				echo 'а = ' . $a . ', b = ' . $b;
			?>
		<p>
			<?php			
				$a = 8;
				$b = 25;
				echo 'а = ' . $a . ', b = ' . $b;
			?>
		<nbsp>
			<?php
				$c = $a; 
				$a = $b;
				$b = $c;
				echo 'а = ' . $a . ', b = ' . $b;
			?>
		<p>
			<?php			
				$a = 17;
				$b = 3;
				echo 'а = ' . $a . ', b = ' . $b;
			?>
		<nbsp>
			<?php
				$c = $a; 
				$a = $b;
				$b = $c;
				echo 'а = ' . $a . ', b = ' . $b;
			?>
		<p>
			<?php	
				$name = "Петър";
				$favorite_thing = "FPL";
				echo "Казвам се $name, а това, което обичам да правя е $favorite_thing";
			?>
		<p>
			<?php	
				$name = "Петя";
				$favorite_thing = "гледане на филми";
				echo "Това е $name, а нейното нещо, което обича да прави е $favorite_thing";
			?>
		<p>
		<div id="blue_text">
			<?php				
				echo "I've gone to the store";
			?>
		</div>
		<div id="red_text">
			<?php				
				echo "\"The harder's the life is, the sweeter's the song is\"";
			?>
		</div>
			<?php
				$user_name = "Petar";
				$course = "php course";
				$student_type = "teacher";
				$course_time = "two";
				echo "Hi, $user_name! You`ve been approved to take part in the $course as a $student_type. The $course will last for $course_time ";
				if ($course_time === "one"){
					echo "day.";
				} else {
					echo "days.";
				}				 
			?>
		<p>
			<?php	
				$course_time = "one";
				echo "Hi, $user_name! You`ve been approved to take part in the $course as a $student_type. The $course will last for $course_time ";
				if ($course_time === "one"){
					echo "day.";
				} else {
					echo "days.";
				}			
			?>
		<p>
			<?php	
				$a = 10;
				$b = 20;
				$s = $a*$b;
				echo "Rectangle, a = $a, b = $b S = $s";
			?>
		<p>
			<?php	
				$a = 15;
				$s = $a * $a;
				echo "Square, a = $a S = $s";
				?>
		<p>
			<?php	
				$a = 10;
				$b = 15;
				$s = ($a * $b) / 2;
				echo "Triange, a = $a, b = $b S = $s";
			?>	
		<p>
			<?php	
				$a = 15;
				$s = pi() * $a * $a;
				echo "Circle, r = $a, S = $s";
			?>	
		<p>
			<?php 
				$table_data = array("Име:", "Телефонен номер:", "Възраст", "Адрес");
			?>
			<table>
			     <?php foreach ($table_data as $row){ ?>
			     <tr>
			       <td><? var_dump($row); ?></td>
			     </tr>
			 <?php }
			 ?>
   				</table>
	</body>
</html>