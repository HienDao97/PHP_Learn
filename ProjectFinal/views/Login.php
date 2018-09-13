
<?php
    include_once('layouts/header.php');

?>
		<div class="inner-header">
		<div class="container">
			<div class="pull-left">
				<h6 class="inner-title">Đăng nhập</h6>
			</div>
			<div class="pull-right">
				<div class="beta-breadcrumb">
					<a href="index.html">Home</a> / <span>Đăng nhập</span>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<!-- header -->
	<div class="container">
		<div id="content">
			
			<form action="?mod=login&act=postLogin" method="post" class="beta-form-checkout">
				<div class="row">
					<div class="col-sm-3"></div>
					<div class="col-sm-6">
						<h4>Đăng nhập</h4>
						<div class="space20">&nbsp;</div>

						
						<div class="form-block">
							<label for="email">Email address*</label>
							<input type="text" class="form-control" id="" name="Email" placeholder="Nhap email" value="<?php if(isset($_COOKIE['oldmail'])){echo $_COOKIE['oldmail'];}?>"  required>
						</div>
						<div class="form-block">
							<label for="phone">Password*</label>
							<input type="text" class="form-control" id="" name="MatKhau" placeholder="nhap mat khau"  required>
						</div>
						<div class="form-block">
							<button type="submit" class="btn btn-primary" name="login">Login</button>
						</div>
					</div>
					<div class="col-sm-3"></div>
				</div>
			</form>



			
		</div> <!-- #content -->
	</div> <!-- .container -->

<?php
    include_once('layouts/footer.php');

?>