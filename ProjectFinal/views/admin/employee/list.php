
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
                            Danh sách nhân viên
                        </div>
                        <!-- /.panel-heading -->
                        <a href="" class="btn btn-success" style="margin-left: 35px; margin-top: 30px;" data-toggle="modal" data-target="#exampleModal">Thêm nhân viên</a>

                        <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                        Launch demo modal
                        </button> -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Thêm nhân viên</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                   <!--  ... -->
                                        <div class="container" style="padding-top: 35px; padding-bottom: 35px;">
                           
                                                <form action="?mod=employee&act=store" method="POST" role="form" id="form-register">
                        
                    
                        <div class="form-group">
                            <label for="">Mã nhân viên</label>
                            <input style="width: 520px;" type="text" class="form-control" id="" name="MaNV" value="<?=$employee['MaNV']?>" placeholder="" required>
                        </div>
                        <div class="form-group">
                            <label for="">Tên nhân viên</label>
                            <input style="width: 520px;" type="text" class="form-control" id="" name="TenNV" value="<?=$employee['TenNV']?>" placeholder="" required>
                        </div>
                        <div class="form-group">
                            <label for="">Số điện thoại</label>
                            <input style="width: 520px;" type="text" class="form-control" id="" name="SDT" value="<?=$employee['SDT']?>" placeholder="" required>
                        </div>
                        <div class="form-group">
                            <label for="">Email</label>
                            <input style="width: 520px;" type="text" class="form-control" id="" name= "Email" value="<?=$employee['Email']?>" placeholder="" required>
                        </div>
                        <div class="form-group">
                            <label for="">Mật khẩu</label>
                            <input style="width: 520px;" type="password" class="form-control" id="" name= "MatKhau" value="<?=$employee['MatKhau']?>" placeholder="" required>
                        </div>
                        
                        
                    
                        <button type="submit" class="btn btn-primary" name="creat">Thêm nhân viên</button>
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
                                    <tr>
                                        <td align="center">Mã nhân viên</td>
                                        <td align="center">Tên nhân viên</td>
                                        <td align="center">Số điện thoại</td>
                                        <td align="center">Email</td>
                                        <td align="center">Mật Khẩu</td>
                                        <td align="center">#</td> 
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($data as $row ) {?>
                                    <tr>
                                        <td align="center"><?= $row["MaNV"]?></td>
                                        <td align="center"><?= $row["TenNV"]?></td>
                                        <td align="center"><?= $row["SDT"]?></td>
                                        
                                        <td align="center"><?= $row["Email"]?></td>
                                        <td align="center"><?= $row["MatKhau"]?></td>
                                        <td>
                                            <a class="btn btn-success" href="index.php?mod=employee&act=detail&MaNV=<?= $row["MaNV"]?>"><img src="https://png.icons8.com/metro/50/000000/view-details.png" width="25px"></a>
                                            <a class="btn btn-danger" href="index.php?mod=employee&act=edit&MaNV=<?= $row["MaNV"]?>"><img src="https://png.icons8.com/metro/50/000000/edit.png" width="25px"></a>
                                            <a class=" btn btn-info delete"  href="index.php?mod=employee&act=delete&MaNV=<?= $row["MaNV"]?>" ><img src="https://png.icons8.com/metro/50/000000/trash.png" width="25px"></a>
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
        toastr.success('Thêm thành công !');
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