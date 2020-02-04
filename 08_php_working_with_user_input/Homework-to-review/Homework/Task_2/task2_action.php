<?php


if(!empty($_POST['firstname']) && !empty($_POST['secondname']) && !empty($_POST['lastname']) && !empty($_POST['ID']) && !empty($_POST['adress']) && !empty($_POST['education']) && !empty($_POST['job'])){
	$first_name = $_POST['firstname'];
	$second_name = $_POST['secondname'];
	$last_name = $_POST['lastname'];
	$ID = $_POST['ID'];
	$adress = $_POST['adress'];
	$education = $_POST['education'];
	$job = $_POST['job'];

		
	echo"
	<head>
	<link rel='stylesheet' type='text/css' href='style_task2.css'>
	</head>
	<body>
		<table>
			<tr>
				<td>Your first name is</td>
				<td class='td_info'>" . $first_name . "</td>
			</tr>
			<tr>
				<td>Your second name is</td>
				<td class='td_info'>" . $second_name . "</td>
			</tr>
			<tr>
				<td>Your last name is</td>
				<td class='td_info'>" . $last_name . "</td>
			</tr>
			<tr>
				<td>Your ID is</td>
				<td class='td_info'>" . $ID . "</td>
			</tr>
			<tr>
				<td>Your adress is</td>
				<td class='td_info'>" . $adress . "</td>
			</tr>
			<tr>
				<td>Your job is</td>
				<td class='td_info'>" . $job . "</td>
			</tr>
		</table>
	</body>";
}
else{
	echo 'Please enter whole information required!!!';
}