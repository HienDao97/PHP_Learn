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
				 <div class="container" style="padding-bottom: 35px; padding-top: 35px;">
			        
			        <form action="?mod=customer&act=store" method="POST" role="form" id="form-register">
			            
			        
			            <div class="form-group">
			                <label for="">Mã khách hàng</label>
			                <input type="text" class="form-control" id="ID" onkeyup="checkIDKH()" name="MaKH" value="<?=$customer['MaKH']?>" placeholder="Nhập mã khách hàng"  >
			                <p id="error-id" style="color: red;"></p>
			            </div>
			            <div class="form-group">
			                <label for="">Họ tên</label>
			                <input type="text" class="form-control" id="name" onkeyup="checkNameKH()" name="TenKH" value="<?=$customer['TenKH']?>" placeholder="Nhập tên khách hàng"  >
			                <p id="error-name" style="color: red;"></p>
			            </div>
			            <div class="form-group">
			                <label for="">Số điện thoại</label>
			                <input type="text" class="form-control" id="phone" onkeyup="checkPhoneKH()" name="SDT" value="<?=$customer['SDT']?>" placeholder="Nhập số điện thoại"  >
			                <p id="error-phone" style="color: red;"></p>
			            </div>
			            <div class="form-group">
			                <label for="">Email</label>
			                <input type="text" class="form-control" id="email" onkeyup="checkMailKH()" name= "Email" value="<?=$customer['Email']?>" placeholder="Nhập email"  >
			                <p id="error-mail" style="color: red;"></p>
			            </div>
			            <div class="form-group">
			                <label for="">Địa chỉ</label>
			                <input type="text" class="form-control" id="address" onkeyup="checkAddressKH()" name= "DiaChi" value="<?=$customer['DiaChi']?>" placeholder="Nhập địa chỉ"  >
			                <p id="error-add" style="color: red;"></p>
			            </div>
			            
						<div class="form-group">
							<label>Giới tính</label>
							<label class="radio-inline">
								<input type="radio" class="check" name="GioiTinh" onclick="checkSexKH(this)" value="Nam">Male
							</label>
							<label class="radio-inline">
								<input type="radio" class="check" name="GioiTinh"   onclick="checkSexKH(this)" value="Nữ">Female
							</label>
							<label class="radio-inline">
								<input type="radio" class="check" name="GioiTinh" onclick="checkSexKH(this)" value="Khác">Other
							</label>
						</div>
			            
			            
			        
			            <button type="submit"  id="register-kh" class="btn btn-primary" name="creat">Thêm khách hàng</button>
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