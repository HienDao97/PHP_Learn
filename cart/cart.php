<?php 
    session_start();
    if(isset($_SESSION['cart'])){
        $products =$_SESSION['cart'];
    }else{
        $products = array();
    }
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
		<h3>Danh sách sản phẩm trong giỏ hàng </h3>
		<a href="index.php"><button class="btn btn-info" style="margin-bottom: 30px;">Trở lại trang sản phẩm</button></a>
    	<table class="table">
    		<tr>
    			<td align="center">Mã sản phẩm</td>
    			<td align="center">Tên sản phẩm</td>
    			<td align="center">Đơn giá</td>
    			<td align="center">Số lượng</td>
    			<td align="center">Thành tiền</td>
    			<td>Hành động</td>
    		</tr>


    		<?php 
    		$sum = 0;
    		foreach ($products as $product) {
    			$sum+=$product[2]*$product[3];
    			?>
    		 	<tr>
    		 		<td align="center"><?= $product[0]?></td>
    		 		<td align="center"><?= $product[1]?></td>
    		 		<td align="right"><?= number_format($product[2])?></td>
    		 		<td align="center"><a class="btn btn-primary" href="add2cart.php?code=<?= $product[0]?>">+</a><?= $product[3]?><a class="btn btn-primary" href="delete.php?code=<?= $product[0]?>">-</a></td>
    		 		<td align="right"><?= number_format($product[2]*$product[3])?></td>
    		 		<td><a href="delete-remove.php?code=<?= $product[0]?>"><button class="btn btn-info">Xóa khỏi giỏ hàng</button></a></td> 
    		 		
    		 	
    		 	</tr>
    		<?php } ?>
    		<tr>
    			<td colspan="4" align="right">Tổng tiền</td>
    			<td align="right"><?= number_format($sum)?></td>
                <td></td>
    		</tr>
			
    	</table>
        <a href="customer-form.php"><button class="btn btn-success">Thanh toán</button> </a><a href="destroy-cart.php"><button class="btn btn-warning">Hủy đơn hàng</button></a>
    </div>
</body>
</html>