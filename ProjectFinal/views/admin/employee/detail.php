<?php include_once('views/admin/layouts_admin/header.php'); ?>

<div id="page-wrapper">
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Quản lý nhân viên</h1>
		</div>
		<!-- /.col-lg-12 -->
	</div>
	<!-- /.row -->
	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-heading">
					Thông tin nhân viên
				</div>
				<!-- /.panel-heading -->
				<div class="container">
					<h3 align="center">EMPLOYEE DETAIL</h3>
					<p>Mã nhân viên: <?=$employee['MaNV']  ?></p>
			        <p>Họ tên: <?=$employee['TenNV']  ?></p>
			        <p>Số điện thoại: <?=$employee['SDT']  ?></p>
			        <p>Email : <?=$employee['Email']  ?></p>

				</div>

			</div>
			<!-- /.panel -->
		</div>
		<!-- /.col-lg-12 -->
	</div>
	<!-- /.row -->


</div>
<?php include_once('views/admin/layouts_admin/footer.php'); ?>