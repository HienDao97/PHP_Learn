<?php include_once('views/admin/layouts_admin/header.php'); ?>

<div id="page-wrapper">
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Quản lý khách hàng</h1>
		</div>
		<!-- /.col-lg-12 -->
	</div>
	<!-- /.row -->
	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-heading">
					Chi tiết khách hàng
				</div>
				<!-- /.panel-heading -->
				<div class="container">
					<h3 align="center">CUSTOMERS DETAIL</h3>
					<p>Mã khách hàng: <?=$customer['MaKH']  ?></p>
					<p>Họ và Tên: <?=$customer['TenKH']  ?></p>
					<p>Gioi tính: <?=$customer['GioiTinh']  ?></p>
					<p>Số điện thoại: <?=$customer['SDT']  ?></p>
					<p>Email : <?=$customer['Email']  ?></p>
					<p>Địa chỉ: <?=$customer['DiaChi']  ?></p>

				</div>

			</div>
			<!-- /.panel -->
		</div>
		<!-- /.col-lg-12 -->
	</div>
	<!-- /.row -->


</div>
<?php include_once('views/admin/layouts_admin/footer.php'); ?>