<?php
	session_start();
	include ('includes/header.php');
	if (isset($_SESSION['page_log'])){
		$_SESSION['page_log'] .= 'Visited second page at ' . date("Y-m-d h:i:s") . '<br>';
	} else {
		$_SESSION['page_log'] = 'Visited second page at ' . date("Y-m-d h:i:s") . '<br>';
	}
?>
<div style="margin-top: 20px; height: 60px">
	<h3>Second page</h3>
	<form method="post" action="index.php" style="float: left; margin-right: 10px">
		<input type="submit" name="submit" value="Go to first page">	
	</form>
	<form method="post" action="third_page.php" style="float: left; margin-right: 10px">
		<input type="submit" name="submit" value="Go to third page">	
	</form>
	<form method="post" action="log_out.php" style="margin-top: 20px" style="float: left; margin-right: 10px">
		<input type="submit" name="submit" value="Start Over">
	</form>
</div>
<div style="margin-top: 20px">
	<?php
		echo $_SESSION['page_log'];
	?>
</div>
<?php
	include ('includes/footer.php');
?>