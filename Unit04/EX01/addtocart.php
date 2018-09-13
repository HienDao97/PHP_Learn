<?php
session_start();
	//session_destroy();
$products = array(
	'SP01' => array('SP01','Book1','4000','10'),
  'SP02' => array('SP02','Book2','5000','20'),
  'SP03' => array('SP03','Book3','6000','30'),
);
	//buoc 1 : lay ma code san pham
$code = $_GET['code'];
if(isset($_SESSION['cart'][$code])){

	$_SESSION['cart'][$code][3]++;

}else{
		// buoc 2: lay thong tin toan bo san pham
	$product = $products[$code];

	//buoc 3: gan so luong mua ve bang 1
	$product['3']=1;
	//buoc4: dua san pham vao session gio hang

	$_SESSION['cart'][$code] = $product;
}


header('Location:giohang.php');



?>