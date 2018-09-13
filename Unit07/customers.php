<?php 
	
	include_once('connection.php');
	// cau lenh truy van co so du lieu

	$query ="SELECT * from khachhang";


	// thuc thi cau lenh truy van co so du lieu

	$result = $conn->query($query);

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
		<h3>Danh sach khach hang</h3>
		<a class="btn btn-danger" href="customer_add.php">ADD</a>
		<p><?php if(isset($_COOKIE['msg'])) echo $_COOKIE['msg']; ?></p>
    	<table class="table">
    		<tr>
    			<td align="center">Ma khach hang</td>
    			<td align="center">Ten khach hang</td>
    			<td align="center">So dien thoai</td>
    			<td align="center">Email</td>
    			<td align="center">Dia chi</td>
                <td align="center">Hanh dong</td> 
    		</tr>


    		<?php while($row= $result->fetch_assoc()){
    		?>
    		 	<tr>
    		 		<td align="center"><?= $row["MaKH"]?></td>
    		 		<td align="center"><?= $row["TenKH"]?></td>
                    <td align="center"><?= $row["SDT"]?></td>
    		 		
    		 		<td align="center"><?= $row["Email"]?></td>
                    <td align="center"><?= $row["DiaChi"]?></td>
    		 		<td>
    		 			<a class="btn btn-success" href="customer_detail.php?MaKH=<?= $row["MaKH"]?>">Xem chi tiet</a>
    		 			<a class="btn btn-danger" href="customer_edit.php?MaKH=<?= $row["MaKH"]?>">Sua</a>
    		 			<a class=" btn btn-danger" onclick="return confirm('ARE YOU SURE?')" href="customer_delete.php?MaKH=<?= $row["MaKH"]?>">Xoa</a>
    		 		</td> 
    		 		
    		 	
    		 	</tr>
    		<?php } ?>
    	</table>
    </div>
</body>
</html>