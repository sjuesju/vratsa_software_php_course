<?php
	if(!empty($_POST['name']) && !empty($_POST['city'])){
		echo $_POST['name'] . ' твоят любим град е '  . $_POST['city'];

	} else {
		echo 'Please fill the fields';
	}
?>