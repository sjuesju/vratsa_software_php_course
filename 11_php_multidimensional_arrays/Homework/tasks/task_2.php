<!DOCTYPE html>
<html lang="bg-Bg">
<head>
	<title>Домашно по PHP: Многомерни масиви - Задача 2</title>
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
			<h2>Задача 2</h2>
			<div class="sidebar_content">
				Генерирайте елементите на двумерен масив с размер m*n и ги отпечатайте под формата на таблица
			</div>					
		</div>
		<div id="content">
			<form method="post">	
				<div id="task_current_two">
					<div id="add_student_info_main">
						<h2>Добавете ученик</h2>										
						<div class="margin_left margin_bottom_2">
							Въведи брой на ученици в класа: <input type="number" name="students_num" min="1">							
						</div>								
					</div>
				</div>
				<div id="task_next_two">					
					<div id="task_next_two_header">
						<input type="submit" name="submit" id="submit_button" value="Генерирайте таблиците">
						<h3>Таблици с многомерни масиви</h3>
						<h5>Въведете брой колони и редове и генерирайте таблиците</h5>						
					</div>
					<div class="table_position">	
						Колони: <input type="number" class="table_one" name="table_one_cols">
						Редове: <input type="number" class="table_one" name="table_one_rows">
						<div class="inner_table">
						<?php
							if(isset($_POST['submit'])){
								if(isset($_POST['table_one_cols']) && isset($_POST['table_one_rows']))
									$n = $_POST['table_one_cols'];
									$m = $_POST['table_one_rows'];
									$arr_first = [];
									$element = 3;
									for ($i=0; $i < $m; $i++) { 
										$arr_first[$i] = [];
										for ($a=0; $a < $n; $a++) { 
											$arr_first[$i][$a] = $element;
											$element+= 2;
										}
										$element = $element * 2 - 2;
									}

								echo '<table border="1">';
								for ($row=0; $row < sizeof($arr_first); $row++) { 
									echo '<tr>';
									for ($col=0; $col < sizeof($arr_first[$row]); $col++) { 
										echo '<td>'; 
										echo $arr_first[$row][$col];
										echo '</td>';
									}
									echo '</tr>';
								}
								echo '</table>';
							}							
						?>
						</div>
					</div>
					<div class="table_position">						
						Колони: <input type="number" class="table_one" name="table_second_cols">
						Редове: <input type="number" class="table_one" name="table_second_rows">						
						<div class="inner_table">
							<?php
								if(isset($_POST['submit'])){
									if (isset($_POST['table_second_cols']) && isset($_POST['table_second_rows']))
									$m = $_POST['table_second_cols'];
									$n = $_POST['table_second_rows'];

									$element = 1;
									for ($i=0; $i < $m; $i++) { 
										$arr[$i] = [];
										for ($a=0; $a < $n; $a++) { 
											$arr[$i][$a] = $element;
											$element += 3;
										}
									}									
									
									echo '<table border="1">';
									for ($row=0; $row < $n; $row++) { 
										echo '<tr>';
										for ($col=0; $col < $m; $col++) { 
											echo '<td>'; 
											echo $arr[$col][$row];
											echo '</td>';
										}
										echo '</tr>';
									}
									echo '</table>';
								}							
							?>
						</div>						
					</div>
					<div class="table_position">						
						Колони: <input type="number" class="table_one" name="table_third_cols">
						Редове: <input type="number" class="table_one" name="table_third_rows">
						<div class="inner_table">
						<?php
							if(isset($_POST['submit'])){
								if (isset($_POST['table_third_cols']) && isset($_POST['table_third_rows'])){
									$n = $_POST['table_third_cols'];
									$m = $_POST['table_third_rows'];
									$element = 1;
									for ($i=0; $i < $m; $i++) { 
										$arr[$i] = [];
										for ($a=0; $a < $n; $a++) { 
											$arr[$i][$a] = $element;
											$element++;
										}
									}																	
									
									echo '<table border="1">';
									for ($row=0; $row < $m; $row++) { 
										echo '<tr>';
										$position = 0;
										for ($col=0; $col < $n; $col++) { 
											echo '<td>'; 
											echo $arr[$row][$col];
											echo '</td>';
											$position = $col;
										}
										echo '</tr>';
										$row++;
										if ($row >= $n){
											break;
										}
										echo '<tr>';
										for ($position; $position >= 0; $position--) {
											echo '<td>';											
											echo $arr[$row][$position];
											echo '</td>';
										}
										echo '</tr>';
									}
									echo '</table>';
								}
							}
						?>
					</div>
					</div>
					<div class="table_position">						
						Колони: <input type="number" class="table_one" name="table_fourth_cols">
						Редове: <input type="number" class="table_one" name="table_fourth_rows">
						<div class="inner_table">
						<?php
							if(isset($_POST['submit'])){
								if (isset($_POST['table_fourth_cols']) && isset($_POST['table_fourth_rows'])){
									$m = $_POST['table_fourth_cols'];
									$n = $_POST['table_fourth_rows'];
									$element = 1;
									for ($i=0; $i < $m; $i++) { 
										$arr[$i] = [];
										for ($a=0; $a < $n; $a++) { 
											$arr[$i][$a] = $element;
											$element++;
										}
									}
									echo '<table border="1">';
									for ($row=$n - 1; $row >= 0; $row--) { 
										echo '<tr>';
										for ($col=$m - 1; $col >= 0; $col--) { 
											echo '<td>'; 
											echo $arr[$col][$row];
											echo '</td>';
										}
										echo '</tr>';
									}
									echo '</table>';
								}								
							}							
						?>
					</div>
					</div>
				</div>
			</form>
			</div>	
		<div id="footer">
			
		</div>
	</div>	
</body>
</html>