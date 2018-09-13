

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
                            Chỉnh sửa sản phẩm
                        </div>
                        <!-- /.panel-heading -->
                        <div class="container" style="padding-top: 35px; padding-bottom: 35px;">
                            
                            <form action="?mod=product&act=update" method="POST" role="form" id="form-register">
                                
                            
                                <div class="form-group">
                                    <label for="">Mã sản phẩm</label>
                                    <input type="text" class="form-control" id="" readonly name="MaSP" value="<?=$product['MaSP']?>" placeholder="" required>
                                </div>
                                <div class="form-group">
                                    <label for="">Tên sản phẩm</label>
                                    <input type="text" class="form-control" id="" name="TenSP" value="<?=$product['TenSP']?>" placeholder="" required>
                                </div>
                                <div class="form-group">
                                    <label for="">Số lượng</label>
                                    <input type="text" class="form-control" id="" name="SoLuong" value="<?=$product['SoLuong']?>"  placeholder="" required>
                                </div>
                                <div class="form-group">
                                    <label for="">Đơn giá</label>
                                    <input type="text" class="form-control" id="" name= "DonGia" value="<?=$product['DonGia']?>"   placeholder="" required>
                                </div>
                                 <div class="form-group">
                                    <label for="">Mô tả</label>
                                    <input type="text" class="form-control" id="" name= "GhiChu" value="<?=$product['GhiChu']?>"   placeholder="" required>
                                </div>
                                <!--  <div class="form-group">
                                    <label for="">Anh</label>
                                   
                                        <input type="file" name="fileToUpload" id="fileToUpload">
                                        
                                </div> -->


                                <div class="form-group">
                                    <label for="">Loại sản phẩm</label>
                                    <select name="LoaiSP" id="">
                                        <?php foreach ($types as $type ) {
                                            ?>
                                            <option <?php if($product['LoaiSP']==$type['Ma_Loai_SP']) echo "selected"; ?> value="<?=$type['Ma_Loai_SP'] ?>"><?=$type['Ten_Loai_SP'] ?></option>

                                            <?php } ?>
                                        </select>
                                    </div> 
                                
                                
                            
                                <button type="submit" class="btn btn-primary" name="Update">UPDATE</button>
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