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
                     Chỉnh sửa thông tin
                </div>
                <div class="container" style="padding-bottom: 35px;padding-top: 35px;">
                    <h3>CẬP NHẬT THÔNG TIN NHÂN VIÊN</h3>
                    <form action="?mod=employee&act=update" method="POST" role="form" id="form-register">
                        
                    
                        <div class="form-group">
                            <label for="">Mã nhân viên</label>
                            <input type="text" class="form-control" id="ID" name="MaNV" placeholder="" readonly value="<?=$employee['MaNV']?>" required>
                        </div>
                        <div class="form-group">
                            <label for="">Họ và tên</label>
                            <input type="text" class="form-control" onkeyup="checkName()" id="name" name="TenNV" placeholder="" value="<?=$employee['TenNV']?>" required>
                        </div>
                        
                        
                        <div class="form-group">
                            <label for="">Số điện thoại</label>
                            <input type="text" class="form-control" id="count" onkeyup="checkCount()" name="SDT" placeholder="" value="<?=$employee['SDT']?>" required>
                        </div>
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="text" class="form-control" id="price" onkeyup="checkPrice()" name= "Email" placeholder="" value="<?=$employee['Email']?>" required>
                        </div>
                        <div class="form-group">
                            <label for="">Mật khẩu</label>
                            <input type="password" class="form-control" id="" name= "MatKhau" placeholder="" value="" required>
                        </div>
                        
                        
                    
                        <button type="submit" id="register" class="btn btn-primary" name="Update">UPDATE</button>
                    </form>
                </div>

            </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->


</div>
<?php include_once('views/admin/layouts_admin/footer.php'); ?>