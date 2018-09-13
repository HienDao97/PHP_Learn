
<?php
    include_once('layouts/header.php');

?>

	<div class="inner-header">
		<div class="container">
			<div class="pull-left">
				<h6 class="inner-title">Sản phẩm</h6>
			</div>
			<div class="pull-right">
				<div class="beta-breadcrumb font-large">
					<a href="index.html">Home</a> / <span>Sản phẩm</span>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<div class="container">
		<div id="content" class="space-top-none">
			<div class="main-content">
				<div class="space60">&nbsp;</div>
				<div class="row">
					<div class="col-sm-3">
						<ul class="aside-menu">
							<li><a href="#">Hồng trà</a></li>
							<li><a href="#">Trà Sữa</a></li>
							<li><a href="#">Mojito</a></li>
							<li><a href="#">Macchiato</a></li>
							<li><a href="#">Trà trái cây</a></li>
							<li><a href="#">Trà sữa Nhật Bản</a></li>
							<li><a href="#">Kem sữa Phô Mai</a></li>
							<li><a href="#">Coffee</a></li>
							<li><a href="#">Sữa tươi</a></li>
							
							
						</ul>
					</div>
					<div class="col-sm-9">
						<div class="beta-products-list">
							<h4>New Products</h4>
							<div class="beta-products-details">
								<!-- <p class="pull-left">438 styles found</p> -->
								<div class="clearfix"></div>
							</div>

							<div class="row">
								<?php foreach ($data as $row) {?>
								<div class="col-sm-4">
									<div class="single-item">
										<div class="single-item-header">
											<a href="product.html"><img src="<?=$row['image']?>" alt=""></a>
										</div>
										<div class="single-item-body">
											<p class="single-item-title"><?=$row['TenSP']?></p>
											<p class="single-item-price">
												<span><?=number_format($row['DonGia'])?></span>
											</p>
										</div>
										<div class="single-item-caption">
											<a class="add-to-cart pull-left" href="?mod=home&act=addtocart2&MaSP=<?= $row['MaSP']?>"><i class="fa fa-shopping-cart"></i></a>
											<a class="beta-btn primary" href="?mod=home&act=product_detail&MaSP=<?= $row['MaSP']?>">Details <i class="fa fa-chevron-right"></i></a>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
								<?php } ?>
								
								<!-- <div class="col-sm-4">
									<div class="single-item">
										<div class="single-item-header">
											<a href="product.html"><img src="../public/source/image/product/Originals/tra-sua-panda.jpg" alt=""></a>
										</div>
										<div class="single-item-body">
											<p class="single-item-title">Sample Woman Top</p>
											<p class="single-item-price">
												<span>$34.55</span>
											</p>
										</div>
										<div class="single-item-caption">
											<a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
											<a class="beta-btn primary" href="product.html">Details <i class="fa fa-chevron-right"></i></a>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
								<div class="col-sm-4">
									<div class="single-item">
										<div class="single-item-header">
											<a href="product.html"><img src="../public/source/image/product/Originals/tra-sua-panda.jpg" alt=""></a>
										</div>
										<div class="single-item-body">
											<p class="single-item-title">Sample Woman Top</p>
											<p class="single-item-price">
												<span>$34.55</span>
											</p>
										</div>
										<div class="single-item-caption">
											<a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
											<a class="beta-btn primary" href="product.html">Details <i class="fa fa-chevron-right"></i></a>
											<div class="clearfix"></div>
										</div>
									</div>
								</div> -->
							</div>
						</div> <!-- .beta-products-list -->

						<div class="space50">&nbsp;</div>

						<!-- <div class="beta-products-list">
							<h4>Top Products</h4>
							<div class="beta-products-details">
								<p class="pull-left">438 styles found</p>
								<div class="clearfix"></div>
							</div>
							<div class="row">
								<div class="col-sm-4">
									<div class="single-item">
										<div class="single-item-header">
											<a href="product.html"><img src="../public/source/image/product/Originals/tra-sua-panda.jpg" alt=""></a>
										</div>
										<div class="single-item-body">
											<p class="single-item-title">Sample Woman Top</p>
											<p class="single-item-price">
												<span>$34.55</span>
											</p>
										</div>
										<div class="single-item-caption">
											<a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
											<a class="beta-btn primary" href="product.html">Details <i class="fa fa-chevron-right"></i></a>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
								<div class="col-sm-4">
									<div class="single-item">
										<div class="single-item-header">
											<a href="product.html"><img src="../public/source/image/product/Originals/tra-sua-panda.jpg" alt=""></a>
										</div>
										<div class="single-item-body">
											<p class="single-item-title">Sample Woman Top</p>
											<p class="single-item-price">
												<span>$34.55</span>
											</p>
										</div>
										<div class="single-item-caption">
											<a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
											<a class="beta-btn primary" href="product.html">Details <i class="fa fa-chevron-right"></i></a>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
								<div class="col-sm-4">
									<div class="single-item">
										<div class="single-item-header">
											<a href="product.html"><img src="../public/source/image/product/Originals/tra-sua-panda.jpg" alt=""></a>
										</div>
										<div class="single-item-body">
											<p class="single-item-title">Sample Woman Top</p>
											<p class="single-item-price">
												<span>$34.55</span>
											</p>
										</div>
										<div class="single-item-caption">
											<a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
											<a class="beta-btn primary" href="product.html">Details <i class="fa fa-chevron-right"></i></a>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
							</div>
							<div class="space40">&nbsp;</div>
							
						</div>  --><!-- .beta-products-list -->
					</div>
				</div> <!-- end section with sidebar and main content -->


			</div> <!-- .main-content -->
		</div> <!-- #content -->
	</div> <!-- .container -->


<?php
    include_once('layouts/footer.php');

?>