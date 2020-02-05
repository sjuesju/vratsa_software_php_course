<?php 

session_start();


//$_POST['name'] = $_SESSION['name'];
//$_POST['value'] = $_SESSION['name'];
if($_SESSION == TRUE){
	header("location:log.php");
}
else{
	echo "<a href='logout.php'>log out</a>";
}
$cart= $_POST['clock'];

$sum=0;
for ($i=1; $i <= count($cart) ;) { 
if(!empty($cart[$i]['pieces'])){
		$sum += $cart[$i]['price'] * $cart[$i]['pieces'];
   }
   $i++;
}
 echo $sum; 