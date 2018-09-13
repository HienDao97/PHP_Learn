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
					Thêm khách hàng
				</div>
				 <div class="container" style="padding-top: 35px;padding-bottom: 35px;">
			        
			        <form action="?mod=employee&act=store" method="POST" role="form" id="form-register">
			            
			        
			            <div class="form-group">
			                <label for="">Mã nhân viên</label>
			                <input type="text" class="form-control" id="" name="MaNV" value="<?=$employee['MaNV']?>" placeholder="" required>
			            </div>
			            <div class="form-group">
			                <label for="">Tên nhân viên</label>
			                <input type="text" class="form-control" id="" name="TenNV" value="<?=$employee['TenNV']?>" placeholder="" required>
			            </div>
			            <div class="form-group">
			                <label for="">Số điện thoại</label>
			                <input type="text" class="form-control" id="" name="SDT" value="<?=$employee['SDT']?>" placeholder="" required>
			            </div>
			            <div class="form-group">
			                <label for="">Email</label>
			                <input type="text" class="form-control" id="" name= "Email" value="<?=$employee['Email']?>" placeholder="" required>
			            </div>
			            <div class="form-group">
			                <label for="">Mật khẩu</label>
			                <input type="password" class="form-control" id="" name= "MatKhau" value="<?=$employee['MatKhau']?>" placeholder="" required>
			            </div>
			            
			            
			        
			            <button type="submit" class="btn btn-primary" name="creat">Thêm khách hàng</button>
			        </form>
			    </div>
			</div>
			<!-- /.panel -->
		</div>
		<!-- /.col-lg-12 -->
	</div>
	<!-- /.row -->


</div>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<?php 
if (isset($_COOKIE['msg-false'])) {?>

    <script type="text/javascript">
        toastr.options = {
            "closeButton": false,
            "debug": false,
            "newestOnTop": false,
            "progressBar": false,
            "positionClass": "toast-top-right",
            "preventDuplicates": false,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "2000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        }
        toastr.error('Mã bạn vừa nhập đã tồn tại');
    </script>
    <?php }
    ?>
<?php include_once('views/admin/layouts_admin/footer.php'); ?>