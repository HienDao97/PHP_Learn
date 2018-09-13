

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
                    Danh sách khách hàng
                </div>
                <!-- /.panel-heading -->
                <a href="" class="btn btn-success" style="margin-left: 35px; margin-top: 30px;" data-toggle="modal" data-target="#exampleModal">Thêm khách hàng</a>

                        <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                        Launch demo modal
                        </button> -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Thêm khách hàng</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                   <!--  ... -->
                                        <div class="container" style="padding-top: 35px; padding-bottom: 35px;">
                           
                                                <form action="?mod=customer&act=store" method="POST" role="form" id="form-register">
                        
                    
                                                    <div class="form-group">
                                                        <label for="">Mã khách hàng</label>
                                                        <input style="width: 520px;" type="text" class="form-control" id="ID" onkeyup="checkIDKH()" name="MaKH" value="<?=$customer['MaKH']?>" placeholder="Nhập mã khách hàng"  >
                                                        <p id="error-id" style="color: red;"></p>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Họ tên</label>
                                                        <input style="width: 520px;" type="text" class="form-control" id="name" onkeyup="checkNameKH()" name="TenKH" value="<?=$customer['TenKH']?>" placeholder="Nhập tên khách hàng"  >
                                                        <p id="error-name" style="color: red;"></p>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Số điện thoại</label>
                                                        <input style="width: 520px;" type="text" class="form-control" id="phone" onkeyup="checkPhoneKH()" name="SDT" value="<?=$customer['SDT']?>" placeholder="Nhập số điện thoại"  >
                                                        <p id="error-phone" style="color: red;"></p>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Email</label>
                                                        <input style="width: 520px;" type="text" class="form-control" id="email" onkeyup="checkMailKH()" name= "Email" value="<?=$customer['Email']?>" placeholder="Nhập email"  >
                                                        <p id="error-mail" style="color: red;"></p>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Địa chỉ</label>
                                                        <input style="width: 520px;" type="text" class="form-control" id="address" onkeyup="checkAddressKH()" name= "DiaChi" value="<?=$customer['DiaChi']?>" placeholder="Nhập địa chỉ"  >
                                                        <p id="error-add" style="color: red;"></p>
                                                    </div>
                                                    
                                                    <div class="form-group">
                                                        <label>Giới tính</label>
                                                        <label class="radio-inline">
                                                            <input  type="radio" class="check" name="GioiTinh" onclick="checkSexKH(this)" value="Nam">Male
                                                        </label>
                                                        <label class="radio-inline">
                                                            <input  type="radio" class="check" name="GioiTinh"   onclick="checkSexKH(this)" value="Nữ">Female
                                                        </label>
                                                        <label class="radio-inline">
                                                            <input type="radio" class="check" name="GioiTinh" onclick="checkSexKH(this)" value="Khac">Other
                                                        </label>
                                                    </div>
                                                    
                                                    
                                                
                                                    <button type="submit"  id="register-kh" class="btn btn-primary" name="creat">Thêm khách hàng</button>
                                                </form>
                                            </div>

                                  </div>
                                  <!-- <div class="modal-footer">
                                   
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                  </div> -->
                                </div>
                            </div>
                        </div>




                <div class="panel-body">
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <td align="center">Mã khách hàng</td>
                            <td align="center">Tên khách hàng</td>
                            <td align="center">Số điện thoại</td>
                            <td align="center">Email</td>
                            <td align="center">Địa chỉ</td>
                            <td align="center">Gioi tính</td>
                            <td align="center">Hành động</td> 
                        </thead>
                        <tbody>
                            <?php  foreach ($data as $row ) {?>
                            <tr>
                                <td align="center"><?= $row["MaKH"]?></td>
                                <td align="center"><?= $row["TenKH"]?></td>
                                <td align="center"><?= $row["SDT"]?></td>
                                
                                <td align="center"><?= $row["Email"]?></td>
                                <td align="center"><?= $row["DiaChi"]?></td>
                                <td align="center"><?= $row["GioiTinh"]?></td>
                                <td>
                                    <a class="btn btn-success" href="index.php?mod=customer&act=detail&MaKH=<?= $row["MaKH"]?>"><img src="https://png.icons8.com/metro/50/000000/view-details.png" width="25px"></a>
                                    <a class="btn btn-danger" href="index.php?mod=customer&act=edit&MaKH=<?= $row["MaKH"]?>"><img src="https://png.icons8.com/metro/50/000000/edit.png" width="25px"></a>
                                    <a class=" btn btn-info delete"  href="index.php?mod=customer&act=delete&MaKH=<?= $row["MaKH"]?>"><img src="https://png.icons8.com/metro/50/000000/trash.png" width="25px"></a>
                                </td> 
                         
                            </tr>
                            <?php } ?>
                        </tbody>
                    
                    </table>
                    <!-- /.table-responsive -->
                
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->


</div>

<?php 
if (isset($_COOKIE['msg'])) {?>

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
        toastr.success('Them thanh cong');
    </script>
    <?php }
    ?>
<?php
    if (isset($_COOKIE['msg-false'])) {?>

    <script type="text/javascript">
        toastr.options = {
  "closeButton": true,
  "debug": false,
  "newestOnTop": false,
  "progressBar": false,
  "positionClass": "toast-bottom-right",
  "preventDuplicates": false,
  "onclick": null,
  "showDuration": "300",
  "hideDuration": "1000",
  "timeOut": "5000",
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