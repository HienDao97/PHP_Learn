<?php 


session_start();
$code = $_GET['code'];
echo "$code";


	unset($_SESSION['cart'][$code]);
	


header('Location:cart.php');

?>