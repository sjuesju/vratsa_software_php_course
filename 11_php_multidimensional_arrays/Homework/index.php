<!DOCTYPE html>
<html lang="bg-Bg">
<head>
	<title>Домашно по PHP: Многомерни масиви - Задача 1</title>
	<link rel="stylesheet" type="text/css" href="styles/style.css">
</head>
<body>
	<div id="container">
		<div id="header">
			<h1>Враца Софтуер :: Домашно по PHP :: Многомерни масиви</h1>
		</div>
		<div id="sidebar_left">
			<h2>Задача 1</h2>
			<div class="sidebar_content">
				Създайте двумерен масив с информация за три имена на ученик /5 ученика/ и срочна оценка по 4 предмета.
			</div>
			<h2><a href="tasks/task_2.php">Задача 2</a></h2>
			<div class="sidebar_content">
				<a href="tasks/task_2.php">Генерирайте елементите на двумерен масив с размер m*n и ги отпечатайте под формата на таблица</a>
			</div>
		</div>
		<div id="content">
			<div id="task_current">
				<div id="add_student_info_main">
					<h2>Добавете ученик</h2>
					<form method="post" action="tasks/task_1.php">						
						<div class="margin_left margin_bottom_2">
							Въведи брой на ученици в класа: <input type="number" name="students_num" min="1">
							<input type="submit" name="submit" value="Добави ученик">
						</div>
					</form>					
				</div>
				<div id="display_student_info">
					
				</div>
			</div>
			<div id="task_next">
				<div id="task_next_two_header">
						<h3>Таблици с многомерни масиви</h3>
						<h5>Въведете брой колони и редове и генерирайте таблиците</h5>						
				</div>		
			</div>
		</div>		
		<div id="footer">
			
		</div>
	</div>
</body>
</html>