<?php 
session_start();
//session_destroy();
 echo "<pre>";
	  	print_r($_SESSION['cart']);
	 echo "</pre>";
 ?>
 <!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" >

    <title>Hello, world!</title>
    <style>
    .product:hover{
        text-decoration: none;
    }
</style>
</head>
<body>
    <div class="container" style="margin-top: 20px;">
       
        <h3>Danh sach san pham trong gio hang </h3>
		<a href="bai01.php">Tro lai trang chu >></a>
		<table class="table">
    		<tr>
    			<td align="center">Ma san pham</td>
    			<td align="center">Ten san pham</td>
    			<td align="center">Don gia</td>
    			<td align="center">So luong</td>
    			<td align="center">Thanh tien</td>
    			<!-- <td>#</td> -->
    		</tr>


    		<?php 
    		$sum = 0;
    		foreach ($_SESSION['cart'] as $product) {
    			$sum+=$product[2]*$product[3];
    			?>
    		 	<tr>
    		 		<td align="center"><?= $product[0]?></td>
    		 		<td align="center"><?= $product[1]?></td>
    		 		<td align="right"><?= number_format($product[2])?></td>
    		 		<td align="center"><a class="btn btn-primary" href="addtocart.php?code=<?= $product[0]?>">+</a><?= $product[3]?><a class="btn btn-primary" href="deletetocart.php?code=<?= $product[0]?>">-</a></td>
    		 		<td align="right"><?= number_format($product[2]*$product[3])?></td>
    		 	<!-- 	<td><a href="delete.php?code=<?= $product[0]?>">Delete</a></td> -->
    		 		
    		 	
    		 	</tr>
    		<?php } ?>
    		<tr>
    			<td colspan="4" align="right">Tong tien</td>
    			<td align="right"><?= number_format($sum)?></td>
    		</tr>
			
    	</table>
    
	</div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="js/jquery-3.3.1.slim.min.js" ></script>
<script src="js/popper.min.js" ></script>
<script src="js/bootstrap.min.js" ></script>
</body>
</html>