<?php
require_once('products.php');
session_start();

// Bước 1: lấy mã sản phẩm người dùng chọn

$code = $_GET['code'];
if(isset($_SESSION['cart'][$code])){

	$_SESSION['cart'][$code][3]++;

}else{
// Bước 2 Lấy thông tin sản phẩm dựa vào mã sản phẩm 
	$product = $products[$code];

// Bước 2.1: gán số lượng mua sản phẩm về bằng 1
	$product['3']=1;
// Bước 2.2 : thêm sản phẩm vào giỏ hàng 

	$_SESSION['cart'][$code] = $product;
}


header('Location:cart.php');



?>