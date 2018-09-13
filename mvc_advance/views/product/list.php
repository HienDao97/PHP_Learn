<?php 
	
	 
    
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
		<a class="btn btn-danger" href="?mod=product&act=add">ADD</a>
		<p><?php if(isset($_COOKIE['msg'])) echo $_COOKIE['msg']; ?></p>
    	<table class="table">
    		<tr>
    			<td align="center">Ma san pham</td>
    			<td align="center">Ten san pham</td>
    			<td align="center">Don gia</td>
    			<td align="center">So luong</td>
    			<td align="center">Hanh dong</td> 
    		</tr>


    		<?php foreach ($data as $row ) {
    		?>
    		 	<tr>
    		 		<td align="center"><?= $row["MaSP"]?></td>
    		 		<td align="center"><?= $row["TenSP"]?></td>
    		 		<td align="right"><?= number_format($row["DonGia"])?></td>
    		 		<td align="center"><?= $row["SoLuong"]?></td>
    		 		<td>
    		 			<a class="btn btn-success" href="index.php?mod=product&act=detail&MaSP=<?= $row["MaSP"]?>">Xem chi tiet</a>
    		 			<a class="btn btn-danger" href="index.php?mod=product&act=edit&MaSP=<?= $row["MaSP"]?>">Sua</a>
    		 			<a class=" btn btn-danger" onclick="return confirm('Are you sure ?')" href="index.php?mod=product&act=delete&MaSP=<?= $row["MaSP"]?>">Xoa</a>
    		 		</td> 
    		 		
    		 	
    		 	</tr>
    		<?php } ?>
    	</table>
    </div>
</body>
</html>

<a href="?mod=login&act=logout">Logout</a>