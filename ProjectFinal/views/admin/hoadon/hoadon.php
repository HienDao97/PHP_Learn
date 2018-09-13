

<?php include_once('views/admin/layouts_admin/header.php'); ?>




<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Quản lý hóa đơn</h1>
            
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-6">
            <div class="panel panel-default">
                        <div class="panel-heading">
                            Danh sách sản phẩm
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Mã sản phẩm</th>
                                        <th>Tên sản phẩm</th>
                                        <th>Đơn giá</th>
                                        
                                        <th>Hành động</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($products as $row ) { ?>
                                    <tr>
                                        <td align="center"><?= $row["MaSP"]?></td>
                                        <td align="center"><?= $row["TenSP"]?></td>
                                        <td align="right"><?= number_format($row["DonGia"])?></td>
                                        
                                        <td>
                                            <a class="btn btn-success" href="?mod=sale&act=add2cart&MaSP=<?= $row["MaSP"]?>"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                                            
                                        </td> 
                                        
                                    
                                    </tr>
                                    <?php } ?>
                                </tbody>
                                
                            </table>
                            <!-- /.table-responsive -->
                          
                        </div>
                        <!-- /.panel-body -->
                    </div>
            <!-- /.panel-body -->
        </div>

        <div class="col-lg-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Danh sách sản phẩm khách chọn
                </div>
                <div style="padding-left: 30px;">
                    <h3>HÓA ĐƠN BÁN HÀNG</h3>
                    <p>Mã khách hàng: <?=$customer['MaKH']?></p>
                    <p>Họ tên: <?=$customer['TenKH']?></p>
                    <p>SDT: <?=$customer['SDT']?></p>
                    <p>Địa chỉ: <?=$customer['DiaChi']?></p>
                </div>
                <!-- /.panel-heading -->
                    <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Mã sản phẩm</th>
                                        <th>Tên sản phẩm</th>
                                        <th>Số lượng mua</th>
                                        <th>Đơn giá</th>
                                        
                                        <th>Thành tiền</th>
                                        <th>Hành động</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    $tong_tien =0;
                                    foreach ($cart as $row ) { 
                                        $tong_tien+=$row["DonGia"]*$row['SLmua'];

                                    ?>
                                    <tr>
                                        <td align="center"><?= $row["MaSP"]?></td>
                                        <td align="center"><?= $row["TenSP"]?></td>
                                        <td align="center">
                                            <a class="btn btn-primary" href="?mod=sale&act=add2cart&MaSP=<?= $row['MaSP']?>">+</a>
                                            <?= $row['SLmua']?>
                                            <a class="btn btn-primary" href="?mod=sale&act=remove_product&MaSP=<?= $row['MaSP']?>">-</a>
                                        </td>
                                        <td align="right"><?= number_format($row["DonGia"])?></td>
                                        
                                         <td align="right"><?= number_format($row["DonGia"]*$row['SLmua'])?></td>
                                         <td>
                                            <a class=" btn btn-info delete"  href="?mod=sale&act=deleteAll&MaSP=<?= $row['MaSP']?>">Xóa</a>
                                         </td>
                                        
                                    
                                    </tr>
                                    <?php } ?>
                                </tbody>
                                
                            </table>
                            <!-- /.table-responsive -->
                          
                    </div>
                    
                </table>
                <!-- /.table-responsive -->
                
            </div>
            <div>
                 <h2>Tổng tiền: <span style="color: red;"><?=number_format($tong_tien)?></span> <sup>đ</sup> </h2> 
                <a href="?mod=sale&act=payment" class="btn btn-info" >Thanh toán</a>
                <a href="?mod=sale&act=destroy" class="btn btn-danger">Hủy mua hàng</a>
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
if (isset($_COOKIE['true'])) {?>

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


<?php  if (isset($_COOKIE['error'])) {?>

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
        toastr.error('Số lượng trong kho hàng không đủ !');
    </script>
    <?php }
    ?>



<?php include_once('views/admin/layouts_admin/footer.php'); ?>