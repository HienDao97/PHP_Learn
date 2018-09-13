<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>BetaDesign </title>
	<!-- boostrap -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" >
	<!-- end-boostrap -->

	<link href='http://fonts.googleapis.com/css?family=Dosis:300,400' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="public/source/assets/dest/css/font-awesome.min.css">
	<link rel="stylesheet" href="public/source/assets/dest/vendors/colorbox/example3/colorbox.css">
	<link rel="stylesheet" title="style" href="public/source/assets/dest/css/style.css">
	<link rel="stylesheet" href="public/source/assets/dest/css/animate.css">
	<link rel="stylesheet" title="style" href="public/source/assets/dest/css/huong-style.css">
	



	<style>
		body{
			font-size: 17px;
		}
		.nav-item{
			font-size: 18px;
			padding-left: 20px;
			padding-right: 20px;

		}
		.nav-item:hover{
			text-decoration: underline;
		}

	</style>

	
</head>
<body>
	
	<div id="header">
		<div class="header-top" style="background-color: lightpink;">
			<div class="container">
				<div class="pull-left auto-width-left">
					<ul class="top-menu menu-beta l-inline">
						<li><a href=""><i class="fa fa-home"></i> Số 5 , Milk Tea , Hẻm Xéo</a></li>
						<li><a href=""><i class="fa fa-phone"></i> 01234567890</a></li>
					</ul>
				</div>
				<div class="pull-right auto-width-right">
					<ul class="top-details menu-beta l-inline">
						<li><a href="#"><i class="fa fa-user"></i>Tài khoản</a></li>
						<li><a href="#">Đăng kí</a></li>
						<li><a href="?mod=login&act=form">Đăng nhập</a></li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div> <!-- .container -->
		</div> <!-- .header-top -->
		<div class="header-body">
			<div class="container beta-relative">
				<div class="pull-left">
					<a href="?mod=home&act=doashboard" id="logo"><img src="public/source/image/logo/logo.png" width="200px" alt=""></a>
				</div>
				<div class="pull-right beta-components space-left ov">
					<div class="space10">&nbsp;</div>
					<div class="beta-comp">
						<form role="search" method="get" id="searchform" action="/">
					        <input type="text" value="" name="s" id="s" placeholder="Nhập từ khóa..." />
					        <button class="fa fa-search" type="submit" id="searchsubmit"></button>
						</form>
					</div>

					<div class="beta-comp">
						 <div class="cart">
							
								<a href="?mod=home&act=cart"><i class="fa fa-shopping-cart"></i> Giỏ hàng (Trống) <i class="fa fa-chevron-down"></i></a>
								
							<!-- </div> -->
							<!-- <div class="beta-dropdown cart-body">
								<div class="cart-item">
									<div class="media">
										<a class="pull-left" href="#"><img src="public/source/image/product/Originals/3anhem-320x213.png" alt=""></a>
										<div class="media-body">
											<span class="cart-item-title">Trà sữa ba anh em</span>
											<span class="cart-item-options">Size: XS; Colar: Navy</span>
											<span class="cart-item-amount">1*<span>$49.50</span></span>
										</div>
									</div>
								</div>

								<div class="cart-item">
									<div class="media">
										<a class="pull-left" href="#"><img src="public/source/image/product/Originals/3anhem-320x213.png" alt=""></a>
										<div class="media-body">
											<span class="cart-item-title">Trà sữa ba anh em</span>
											<span class="cart-item-options">Size: XS; Colar: Navy</span>
											<span class="cart-item-amount">1*<span>$49.50</span></span>
										</div>
									</div>
								</div>

								<div class="cart-item">
									<div class="media">
										<a class="pull-left" href="#"><img src="public/source/image/product/Originals/3anhem-320x213.png" alt=""></a>
										<div class="media-body">
											<span class="cart-item-title">Trà sữa ba anh em</span>
											<span class="cart-item-options">Size: XS; Colar: Navy</span>
											<span class="cart-item-amount">1*<span>$49.50</span></span>
										</div>
									</div>
								</div>

								<div class="cart-caption">
									<div class="cart-total text-right">Tổng tiền: <span class="cart-total-value">$34.55</span></div>
									<div class="clearfix"></div>

									<div class="center">
										<div class="space10">&nbsp;</div>
										<a href="checkout.html" class="beta-btn primary text-center">Đặt hàng <i class="fa fa-chevron-right"></i></a>
									</div>
								</div>
							</div> -->
						 </div>  <!-- .cart -->
					</div>
				</div>
				<div class="clearfix"></div>
			</div> <!-- .container -->
		</div> <!-- .header-body -->
		<div class="header-bottom" >
			<div class="">
				<!-- <a class="visible-xs beta-menu-toggle pull-right" href="#"><span class='beta-menu-toggle-text'>Menu</span> <i class="fa fa-bars"></i></a> -->
				<div class="visible-xs clearfix"></div>
				<!-- <nav class="main-menu">
					<ul class="l-inline ov">
						<li><a href="index.html">Trang chủ</a></li>
						<li><a href="#">Sản phẩm</a>
							<ul class="sub-menu">
								<li><a href="product_type.html">Sản phẩm 1</a></li>
								<li><a href="product_type.html">Sản phẩm 2</a></li>
								<li><a href="product_type.html">Sản phẩm 4</a></li>
							</ul>
						</li>
						<li><a href="about.html">Giới thiệu</a></li>
						<li><a href="contacts.html">Liên hệ</a></li>
					</ul>
					<div class="clearfix"></div>
				</nav> -->

				  <!-- Navigation -->
			    <nav class="navbar navbar-expand-lg navbar-light bg-light">
				  <!-- <a class="navbar-brand" href="#">Navbar</a> -->
				  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				    <span class="navbar-toggler-icon"></span>
				  </button>

				  <div class="collapse navbar-collapse" id="navbarSupportedContent">
				    <ul class="navbar-nav mr-auto">
				      <li class="nav-item active">
				        <a class="nav-link" href="?mod=home&act=doashboard">Trang chủ <span class="sr-only">(current)</span></a>
				      </li>
				      <li class="nav-item">
				        <a class="nav-link" href="?mod=home&act=product">Sản Phẩm</a>
				      </li>
				      <li class="nav-item">
				        <a class="nav-link" href="#">Giơí thiệu</a>
				      </li>
				      <li class="nav-item">
				        <a class="nav-link" href="?mod=home&act=contact">Liên hệ</a>
				      </li>
				      <li class="nav-item dropdown">
				        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				          Dropdown
				        </a>
				        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
				          <a class="dropdown-item" href="#">Action</a>
				          <a class="dropdown-item" href="#">Another action</a>
				          <div class="dropdown-divider"></div>
				          <a class="dropdown-item" href="#">Something else here</a>
				        </div>
				      </li>
				      
				    </ul>
				    
				  </div>
				  <div class="clearfix"></div>
				</nav>
			</div> <!-- .container -->
		</div> <!-- .header-bottom -->
	</div> <!-- #header -->
	