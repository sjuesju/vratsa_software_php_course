<!DOCTYPE html>
<html lang="bg-Bg">
<head>
	<title>PHP work with user input - Задача 2</title>
	<link rel="stylesheet" type="text/css" href="../styles/style.css">
</head>
<body>
	<div id="container">
		<div id="home">
			<h3><a href="..\index.php">ОБРАТНО</a></h3>
		</div>
		<div id="header">
			<h1>Задача 2</h1>
			<h4>Да се напише програма, която изисква от потребителя да въведе подробна информация за себе си - три имена, ЕГН, адрес, образование, професия. </h4>
			<p>
			<h4>След изпращането на формата се отпечатва автобиография на потребителя в таблична форма</h4> 
		</div>
		<div id="header_bottom_dot">
		</div>
		<div id="cv_task_container">
			<div id="task_field_cv">
				<h3>Форма за създаване на автобиография</h3>
				<form method="post">
					<fieldset class="text_fieldset_cv">
						<legend>Лични данни</legend>
							<div class="cv_fields"><span class="text_field_name">Име: </span><input type="text" class="add_cv_data" name="name_first"></div>
							<div class="cv_fields"><span class="text_field_name">Презиме: </span><input type="text" class="add_cv_data" name="name_second"></div>
							<div class="cv_fields"><span class="text_field_name">Фамилия: </span><input type="text" class="add_cv_data" name="name_third"></div>
							<div class="cv_fields"><span class="text_field_name">ЕГН: </span><input type="text" class="add_cv_data" name="ucn"></div>					
					</fieldset>
					<fieldset class="text_fieldset_cv">
						<legend>Други данни</legend>
							<div class="cv_fields"><span class="text_field_name">Адрес: </span><input type="text" class="add_cv_data" name="address"></div>
							<div class="cv_fields"><span class="text_field_name">Образование: </span><input type="text" class="add_cv_data" name="education"></div>
							<div class="cv_fields"><span class="text_field_name">Професия: </span><input type="text" class="add_cv_data" name="occupation"></div>					
					</fieldset>
					<input type="submit" name="submit" value="Създай">
				</form>
			</div>
			<div id="task_answer_cv">
				<?php
					if (isset($_POST["submit"])){
						$is_ok = true;					
						if (!isset($_POST['name_first']) || strlen(htmlspecialchars($_POST['name_first'])) < 1){
							$is_ok = false;
						}
						if (!isset($_POST['name_second']) || strlen(htmlspecialchars($_POST['name_second'])) < 1){
							$is_ok = false;
						}
						if (!isset($_POST['name_third']) || strlen(htmlspecialchars($_POST['name_third'])) < 1){
							$is_ok = false;
						}
						if (!isset($_POST['ucn']) || strlen(htmlspecialchars($_POST['ucn'])) < 1){
							$is_ok = false;
						}
						if (!isset($_POST['address']) || strlen(htmlspecialchars($_POST['address'])) < 1){
							$is_ok = false;
						}
						if (!isset($_POST['education']) || strlen(htmlspecialchars($_POST['education'])) < 1){
							$is_ok = false;
						}
						if (!isset($_POST['occupation']) || strlen(htmlspecialchars($_POST['occupation'])) < 1){
							$is_ok = false;
						}
						if ($is_ok == true){
							echo '<table><thead><tr><th colspan="2">Автобиография</th></tr></thead><tbody><tr><td colspan="2">на</td</tr><tr><td colspan="2">' . $_POST['name_first'] . ' ' . $_POST['name_second'] . ' ' . $_POST['name_third'] . '</td></tr><tr><td colspan="2">с ЕГН: ' . $_POST['ucn'] . '</td></tr><tr><td><td></tr><tr><td class="td_heading">Адрес: </td><td class="td_info">' . $_POST['address'] . '</td></tr><tr><td class="td_heading">Образование:  </td><td class="td_info">' . $_POST['education'] . '</td></tr><tr><td class="td_heading">Професия:  </td><td class="td_info">' . $_POST['occupation'] . '</td></tr></tbody></table>';
						} else {
							echo 'Не сте въвели коректни данни. Опитайте отново!';
						}
					}
				?>
			</div>
		</div>
		<div id="footer">
		</div>
	</div>	
</body>
</html>