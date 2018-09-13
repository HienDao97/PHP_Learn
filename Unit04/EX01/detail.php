<?php 

$product= array('SP01','Book1','4000','10');



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
		<div class="row">
			<div class="col-6">
				<div class="img">
					<img src="images\img765.gif" alt="" width="100%">
				</div>
			</div>
			<div class="col-6">
				<h3>Minh la ca, viec cua minh la boi</h3>
				<div class="rating">
					<span>
						<img src="images\sao.png" alt="">
						<img src="images\sao.png" alt="">
						<img src="images\sao.png" alt="">
						<img src="images\sao.png" alt="">
					</span>

				</div>
				<div class="Price">
					<h3>Gia:<?php echo "".$product[2]; ?>$</h3>
					
				</div>
				<div class="soluong">
					<h3>So luong:<?= $product[3]?> </h3>
				</div>

			</div>
		</div>
	</div>
	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="js/jquery-3.3.1.slim.min.js" ></script>
	<script src="js/popper.min.js" ></script>
	<script src="js/bootstrap.min.js" ></script>
</body>
</html>