<?php
	if(isset($_POST['submit'])){
		echo ($_POST['consumption'] + ($_POST['consumption'] / 100 * $_POST['condition']));
	}
?>