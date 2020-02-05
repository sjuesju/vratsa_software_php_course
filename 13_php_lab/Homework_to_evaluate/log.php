<?php 

session_name();

?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 	<form action="" method="post">
 		Enter Your Name<input type="text" name="name">
 		<br>
 		How much money you have?<input type="text" name="value">
 		<br>
 		<input type="submit" name="submit" value="Влез">
 	</form>
 </body>
 </html>

 <?php
$loggedin=NULL;
if(!empty($_POST['name']) && !empty($_POST['value'])){
$_SESSION['name'] = NULL;
$_SESSION['value'] = NULL;   
$_POST['name'] = $_SESSION['name'];
$_POST['value'] = $_SESSION['value'];
$loggedin=TRUE;
$_SESSION['loggedin'] = $loggedin;
header("Location:index.php");
}
else{
	echo "Please enter sth";

}
?> 