<?php 
	$products = array(

		'SP01' => array('SP01','IP5','4000','10'),
		'SP02' => array('SP02','IP6','5000','20'),
		'SP03' => array('SP03','IP8','6000','30'),
		'SP04' => array('SP01','IP7','10000','40'),
		'SP05' => array('SP01','IPX','9000','20'),
	);





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
		<h3>Danh sach san pham</h3>
		<a href="cart.php">Xem danh sach gio hang</a>
    	<table class="table">
    		<tr>
    			<td align="center">Ma san pham</td>
    			<td align="center">Ten san pham</td>
    			<td align="center">Don gia</td>
    			<td align="center">So luong</td>
    			<!-- <td align="center">#</td> -->
    		</tr>


    		<?php 
    		foreach ($products as $product) {?>
    		 	<tr>
    		 		<td align="center"><?= $product[0]?></td>
    		 		<td align="center"><?= $product[1]?></td>
    		 		<td align="right"><?= number_format($product[2])?></td>
    		 		<td align="center"><?= $product[3]?></td>
    		 		<td><a href="add2cart.php?code=<?= $product[0]?>">Add to cart</a></td> 
    		 		
    		 	
    		 	</tr>
    		<?php } ?>
    	</table>
    </div>
</body>
</html>