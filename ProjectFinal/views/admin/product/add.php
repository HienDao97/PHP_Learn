

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
                            Thêm sản phẩm
                        </div>
                        <!-- /.panel-heading -->
                        <div class="container" style="padding-top: 35px; padding-bottom: 35px;">
                           
                            <form action="?mod=product&act=store" method="POST" role="form" id="form-register" enctype="multipart/form-data">
                                
                            
                                <div class="form-group">
                                    <label for="">Mã sản phẩm</label>
                                    <input type="text" class="form-control" id="" name="MaSP" value="<?=$product['MaSP']?>" placeholder="" required>
                                </div>
                                <div class="form-group">
                                    <label for="">Tên sản phẩm</label>
                                    <input type="text" class="form-control" id="" name="TenSP" value="<?=$product['TenSP']?>" placeholder="" required>
                                </div>
                                <div class="form-group">
                                    <label for="">Số lượng</label>
                                    <input type="numeric" class="form-control" id="" name="SoLuong" value="<?=$product['SoLuong']?>"  placeholder="" required>
                                </div>
                                <div class="form-group">
                                    <label for="">Đơn giá</label>
                                    <input type="numeric" class="form-control" id="" name= "DonGia" value="<?=$product['DonGia']?>"   placeholder="" required>
                                </div>
                                <div class="form-group">
                                    <label for="">Mô tả</label>
                                    <textarea type="text" class="form-control" id="" name= "GhiChu" value="<?=$product['GhiChu']?>"   placeholder="" required></textarea> 
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