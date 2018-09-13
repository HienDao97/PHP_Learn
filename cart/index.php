<?php 
	require_once('products.php');

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
		<h3>Danh sách sản phẩm</h3>
		<a href="cart.php"><button class="btn btn-info" style="margin-bottom: 30px;">Xem danh sách giỏ hàng</button></a>
    	<table class="table">
    		<tr>
    			<td align="center">Mã sản phẩm</td>
    			<td align="center">Tên sản phẩm</td>
    			<td align="center">Đơn giá</td>
    			<td align="center">Số lượng</td>
    			<td align="center">Hành động</td>
    		</tr>


    		<?php 
    		foreach ($products as $product) {?>
    		 	<tr>
    		 		<td align="center"><?= $product[0]?></td>
    		 		<td align="center"><?= $product[1]?></td>
    		 		<td align="right"><?= number_format($product[2])?></td>
    		 		<td align="center"><?= $product[3]?></td>
    		 		<td><a href="add2cart.php?code=<?= $product[0]?>"><button class="btn btn-info">Add to cart</button></a></td> 
    		 		
    		 	
    		 	</tr>
    		<?php } ?>
    	</table>
    </div>
</body>
</html>