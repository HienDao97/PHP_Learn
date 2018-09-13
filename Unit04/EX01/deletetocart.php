<?php 


session_start();
$code = $_GET['code'];

if($_SESSION['cart'][$code][3]>1){

	$_SESSION['cart'][$code][3]--;

}else{
	unset($_SESSION['cart'][$code]);
}


header('Location:giohang.php');

?>