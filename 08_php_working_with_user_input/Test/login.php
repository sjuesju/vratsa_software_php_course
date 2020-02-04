<?php
	session_start();
	if(isset($_POST['user_name'])){
		$_SESSION['user_name'] = $_POST['user_name'];
	}
	
	echo $_SESSION['user_name'] . ' You are in! ' ?> <a href="contact.php">Continue</a>
	<p>
	<?php
	var_dump($_SESSION);
?>