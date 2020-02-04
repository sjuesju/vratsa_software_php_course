<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="bg-Bg">
<head>
	<title>Домашно по PHP: Многомерни масиви - Задача 1</title>
	<link rel="stylesheet" type="text/css" href="../styles/style.css">
</head>
<body>
	<div id="container">
		<div id="header">
			<h1>Враца Софтуер :: Домашно по PHP :: Многомерни масиви</h1>
		</div>
		<div id="sidebar_left">
			<h2><a href="../index.php">Задача 1</a></h2>
			<div class="sidebar_content">
				<a href="../index.php">Създайте двумерен масив с информация за три имена на ученик /5 ученика/ и срочна оценка по 4 предмета.</a>
			</div>
			<h2><a href="task_2.php">Задача 2</a></h2>
			<div class="sidebar_content">
				<a href="task_2.php">Генерирайте елементите на двумерен масив с размер m*n и ги отпечатайте под формата на таблица</a>
			</div>
		</div>
		<div id="content">
			<div id="task_current">
				<div id="add_student_info">
					<h2>Добавете ученик</h2>
					<form method="post">
						<?php
							if(isset($_POST['students_num'])){
								$_SESSION['students_num'] = $_POST['students_num'];
							}
							for ($i=1; $i <= $_SESSION['students_num']; $i++) { 
								echo '<div class="margin_left margin_bottom_10">';
								echo '<span id="student_name_centered">Ученик ' . $i . '</span>';
								echo '</div>';
								echo '<div class="margin_left margin_bottom_10">';
								echo 'Трите имена: <input type="text" id="student_name" name="student_name_' . $i . '">';
								echo '</div>';								
								echo '<div class="margin_left margin_bottom_2">';
								echo '<span class="class_lessons">Български език: </span><input type="number" class="width_50" name="bulgarian_' . $i . '" min="2" max="6">';
								echo '</div>';
								echo '<div class="margin_left margin_bottom_2">';
								echo '<span class="class_lessons">Английски език: </span><input type="number" class="width_50" name="english_' . $i . '" min="2" max="6">';
								echo '</div>';
								echo '<div class="margin_left margin_bottom_2">';
								echo '<span class="class_lessons">Математика: </span><input type="number" class="width_50" name="math_' . $i . '" min="2" max="6">';
								echo '</div>';
								echo '<div class="margin_left margin_bottom_2">';
								echo '<span class="class_lessons">История: </span><input type="number" class="width_50" name="history_' . $i . '" min="2" max="6">';
								echo '</div>';
							}
						?>
						<div class="margin_left margin_bottom_2">
							<input type="submit" name="submit" id="add_student_info_submit" value="Добави ученик">
						</div>
					</form>
					<?php
						$students = [];
						if (isset($_POST['submit'])){
							for ($i=1; $i <= 5; $i++) { 
								if (isset($_POST['student_name_' . $i]) && strlen($_POST['student_name_' . $i]) > 1 && isset($_POST['bulgarian_' . $i]) && isset($_POST['english_' . $i]) && isset($_POST['math_' . $i]) && isset($_POST['history_' . $i])){	
										array_push($students, $_POST['student_name_' . $i]);							
										$students[$_POST['student_name_' . $i]] = [
											"bulgarian" => $_POST['bulgarian_' . $i],
											"english" => $_POST['english_' . $i],
											"math" => $_POST['math_' . $i],
											"history" => $_POST['history_' . $i],
											];			
								}
							}
						}
					?>
				</div>
				<div id="display_student_info">
					<?php					
						if (!empty($students)){
							echo '<table id="students_table"><thead><tr><th>Име</td><th>Български език</th><th>Английски език</th><th>Математика</th><th>История</th><th>Среден успех</th></tr></thead><tbody>';
							$average_bulgarian = 0;
							$average_english = 0;
							$average_math = 0;
							$average_history = 0;
							$number_students = 0;
							foreach ($students as $name => $grades) {								
								if (is_array($grades)){
									$number_students++;
									echo '<tr><td>' . $name . '</td>';
									$average_grade = 0;
									foreach ($grades as $subject => $grade) {										
										echo '<td>' . $grade . '</td>';
										$average_grade += $grade;
										if ($subject == 'bulgarian'){
											$average_bulgarian += $grade;
										} elseif($subject == 'english'){
											$average_english += $grade;
										} elseif($subject == 'math'){
											$average_math += $grade;
										} elseif($subject == 'history'){
											$average_history += $grade;
										}
									}
									echo '<td>' . round(($average_grade / 4), 2) . '</td>';
									echo '</tr>';
								}									
							}
							echo '</tbody><tfoot><tr>';
							echo '<td>Среден успех</td>' . '<td>' . round(($average_bulgarian / $number_students), 2) . '</td>' . '<td>' . round(($average_english / $number_students), 2) . '</td>' . '<td>' . round(($average_math / $number_students), 2) . '</td>' . '<td>' . round(($average_history / $number_students), 2) . '</td>';
							echo '<td>'  . round((($average_history + $average_math + $average_english + $average_bulgarian) / ($number_students * 4)), 2) . '</td></tr></tfoot></table>';

						}
					?>
				</div>
			</div>
			<div id="task_next">
			</div>
		</div>		
		<div id="footer">
			
		</div>
	</div>
</body>
</html>