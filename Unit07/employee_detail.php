<?php 
	require_once('connection.php');
    // lay ma san pham can xem 
    $maNV =$_GET['MaNV'];

	// cau lenh truy van co so du lieu

	$query ="SELECT * from nhanvien WHERE MaNV = '".$maNV."'";

   // echo "$query";
    
	// thuc thi cau lenh truy van co so du lieu

	$result = $conn->query($query);
    // vi maNV la duy nhat nen khong can dung vong lap

    $employee = $result->fetch_assoc();

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
		<h3 align="center">EMPLOYEES DETAIL</h3>
		<p>Ma nhan vien: <?=$employee['MaNV']  ?></p>
        <p>Ten nhan vien: <?=$employee['TenNV']  ?></p>
        <p>SDT nhan vien: <?=$employee['SDT']  ?></p>
        <p>Email nhan vien: <?=$employee['Email']  ?></p>
       <!--  <p>Mat Khau nhan vien: <?=$employee['MatKhau']  ?></p> -->

    </div>
</body>
</html>