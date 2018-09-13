<?php 


session_start();
$code = $_GET['code'];


	unset($_SESSION['cart'][$code]);
	


header('Location:cart.php');

?>