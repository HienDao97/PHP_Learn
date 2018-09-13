

 <?php include_once('views/admin/layouts_admin/header.php'); ?>


   

     <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Quản lý sản phẩm</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Danh sách sản phẩm
                        </div>
                        <a href="?mod=product&act=add" class="btn btn-success" style="margin-left: 35px; margin-top: 30px;">Thêm sản phẩm</a>
                       <!--  <a href="" class="btn btn-success" style="margin-left: 35px; margin-top: 30px;" data-toggle="modal" data-target="#exampleModal">Thêm sản phẩm</a>

                       
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Thêm sản phẩm</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                   <!--  ... -->
                                       <!--  <div class="container" style="padding-top: 35px; padding-bottom: 35px;">
                           
                                                <form action="?mod=product&act=store" method="POST" role="form" id="form-register" enctype="multipart/form-data">
                                                    
                                                
                                                    <div class="form-group">
                                                        <label for="">Mã sản phẩm</label>
                                                        <input style="width: 520px;" type="text" class="form-control" id="" name="MaSP" value="" placeholder="" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Tên sản phẩm</label>
                                                        <input style="width: 520px;" type="text" class="form-control" id="" name="TenSP" value="" placeholder="" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Số lượng</label>
                                                        <input style="width: 520px;" type="numeric" class="form-control" id="" name="SoLuong" value=""  placeholder="" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Đơn giá</label>
                                                        <input style="width: 520px;" type="numeric" class="form-control" id="" name= "DonGia" value=""   placeholder="" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Mô tả</label>
                                                        <textarea style="width: 520px;" type="text" class="form-control" id="" name= "GhiChu" value=""   placeholder="" required></textarea> 
                                                    </div>
                                                     <div class="form-group">
                                                        <label for="">Upload file</label>
                                                       
                                                            <input type="file" name="fileToUpload" id="fileToUpload">
                                                            
                                                    </div> 
                                                    <div class="form-group">
                                                        <label for="">Loại sản phẩm</label>
                                                        <select name="LoaiSP" id="">
                                                            <?php foreach ($types as $type ) {
                                                                ?>
                                                            <option value="<?=$type['Ma_Loai_SP'] ?>"><?=$type['Ten_Loai_SP'] ?></option>

                                                            <?php } ?>
                                                        </select>
                                                    </div>
                                                    
                                                    
                                                
                                                    <button type="submit" class="btn btn-primary" name="creat">Thêm sản phẩm</button>
                                                </form>
                                            </div>

                                  </div> -->
                                  <!-- <div class="modal-footer">
                                   
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                  </div> -->
                                </div>
                            </div>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Mã sản phẩm</th>
                                        <th>Tên sản phẩm</th>
                                        <th>Đơn giá</th>
                                        <th>Số lượng</th>
                                        <th>Loại sản phẩm</th>
                                        <th>Hành động</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($data as $row ) { ?>
                                    <tr>
                                        <td align="center"><?= $row["MaSP"]?></td>
                                        <td align="center"><?= $row["TenSP"]?></td>
                                        <td align="right"><?= number_format($row["DonGia"])?></td>
                                        <td align="center"><?= $row["SoLuong"]?></td>
                                        <td align="center"><?= $row["Ten_Loai_SP"]?></td>
                                        <td>
                                            <a class="btn btn-success" href="index.php?mod=product&act=detail&MaSP=<?= $row["MaSP"]?>"><img src="https://png.icons8.com/metro/50/000000/view-details.png" width="25px"></a>
                                            <a class="btn btn-danger" href="index.php?mod=product&act=edit&MaSP=<?= $row["MaSP"]?>"><img src="https://png.icons8.com/metro/50/000000/edit.png" width="25px"></a>
                                            <a class=" btn btn-info delete"  href="index.php?mod=product&act=delete&MaSP=<?= $row["MaSP"]?>"><img src="https://png.icons8.com/metro/50/000000/trash.png" width="25px"></a>
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
        toastr.success('Thêm thành công!');
    </script>
    <?php }
    ?>

  <?php  if (isset($_COOKIE['msg-false'])) {?>

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