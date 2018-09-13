<?php 
	require_once('connection.php');
    // lay ma san pham can xem 
    $maSP =$_GET['MaSP'];

	// cau lenh truy van co so du lieu

	$query ="SELECT * from sanpham WHERE MaSP = '".$maSP."'";

   // echo "$query";
    
	// thuc thi cau lenh truy van co so du lieu

	$result = $conn->query($query);
    // vi maSP la duy nhat nen khong can dung vong lap

    $product = $result->fetch_assoc();

	// while($row= $result->fetch_assoc()){
	// 	echo "<pre>";
	// 		print_r($row);
	// 	echo "</pre>";
	// }


 ?>

 <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Form</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
		<h3 align="center">PRODUCTS DETAIL</h3>
		<p>Ma san pham: <?=$product['MaSP']  ?></p>
        <p>Ten san pham: <?=$product['TenSP']  ?></p>
        <p>So luong san pham: <?=$product['SoLuong']  ?></p>
        <p>Don gia san pham: <?=number_format( $product['DonGia'])  ?></p>

    </div>
</body>
</html>