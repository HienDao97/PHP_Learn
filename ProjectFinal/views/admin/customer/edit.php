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
                     Chỉnh sửa thông tin
                </div>
                <div class="container" style="padding-bottom: 35px;padding-top: 35px;">
                    <h3>CẬP NHẬT THÔNG TIN KHÁCH HÀNG</h3>
                    <form action="?mod=customer&act=update" method="POST" role="form" id="form-register">
                        
                    
                        <div class="form-group">
                            <label for="">Mã khách hàng</label>
                            <input type="text" class="form-control" id="ID" name="MaKH" placeholder="" readonly value="<?=$customer['MaKH']?>" required>
                        </div>
                        <div class="form-group">
                            <label for="">Họ và tên</label>
                            <input type="text" class="form-control" onkeyup="checkName()" id="name" name="TenKH" placeholder="" value="<?=$customer['TenKH']?>" required>
                        </div>
                        
                        <div class="form-group">
                            <label>Giới tính</label>
                            <label class="radio-inline">
                                <input type="radio" class="check" name="GioiTinh" onclick="checkSex(this)" value="Nam" <?php echo $male; ?>>Male
                            </label>
                            <label class="radio-inline">
                                <input type="radio" class="check" name="GioiTinh"  onclick="checkSex(this)" value="Nữ" <?=$female?>>Female
                            </label>
                            <label class="radio-inline">
                                <input type="radio" class="check" name="GioiTinh"  onclick="checkSex(this)" value="Khác" <?=$other?>>Other
                            </label>
                        </div>
                        <div class="form-group">
                            <label for="">Số điện thoại</label>
                            <input type="text" class="form-control" id="count" onkeyup="checkCount()" name="SDT" placeholder="" value="<?=$customer['SDT']?>" required>
                        </div>
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="text" class="form-control" id="price" onkeyup="checkPrice()" name= "Email" placeholder="" value="<?=$customer['Email']?>" required>
                        </div>
                        <div class="form-group">
                            <label for="">Địa chỉ</label>
                            <input type="text" class="form-control" id="address" onkeyup="checkAddress()" name= "DiaChi" placeholder="" value="<?=$customer['DiaChi']?>" required>
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