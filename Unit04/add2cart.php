<?php
session_start();
	//session_destroy();
$products = array(

	'SP01' => array('SP01','IP5','4000','10'),
	'SP02' => array('SP02','IP6','5000','20'),
	'SP03' => array('SP03','IP8','6000','30'),
	'SP04' => array('SP01','IP7','10000','40'),
	'SP05' => array('SP01','IPX','9000','20'),
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


header('Location:cart.php');



?>
