

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
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                   <a href="" style="color: blue;">Milktea</a><span>/</span><a href="">Danh sách hóa đơn</a><span>/</span><a href="">Chi tiết hóa đơn</a>
                </div>
                <!-- /.panel-heading -->
                
               
            </div>
        <!-- /.panel -->
        </div>
    <!-- /.col-lg-12 -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="col-lg-6">
                      
                            <div >
                                <h1>MILK TEA</h1>
                                <p style="padding-left: 18px;">Address: Số 5, hẻm xéo</p>
                                <p style="padding-left: 18px;">phone:0123456789</p>
                            </div>
                            <!-- /.panel-heading -->
                          
                
                <!-- /.panel-body -->
                    </div>

                    <div class="col-lg-6">
                            <div >
                                <h1>HÓA ĐƠN BÁN HÀNG</h1>
                                <p>Mã hóa đơn:<?=$hoadon['MaHD']?></p>
                                <p>Ngày bán:<?=$hoadon['NgayBan']?></p>
                            </div>
                    
                    </div>
               
                <!-- /.panel-body -->
                </div>

                </div>
        </div>
    </div>
    <div class="row" style="padding-left: 30px; font-weight: bold;">
        <h5>Khách hàng:<?=$customer['TenKH']?></h5>
        <h5>Địa chỉ:<?=$customer['DiaChi']?></h5>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div ><!-- class="panel panel-default" -->
                
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <table width="100%" class="table table-striped table-bordered table-hover" id="">
                        <thead>
                            <td align="center">Mã sản phẩm</td>
                            <td align="center">Tên sản phẩm</td>
                            <td align="center">Số lượng</td>
                            <td align="center">Đơn giá</td>
                            <td align="center">Thành tiền</td>
                            
                        </thead>
                        <tbody>
                            <?php foreach ($data as $row ) {?>
                                    <tr>
                                        <td align="center"><?= $row["MaSP"]?></td>
                                        <td align="center"><?= $row["TenSP"]?></td>
                                        <td align="center"><?= $row["SLmua"]?></td>
                                        
                                        <td align="center"><?= $row["GiaBan"]?></td>
                                        <td align="center"><?= number_format($row["ThanhTien"])?></td>
                                         
                                        
                                    
                                    </tr>
                                    <?php } ?>
                        
                        </tbody>
                    
                    </table>
                    <div style=" text-align: right;">
                        <p>Tổng tiền:<?=number_format($hoadon['TongTien'])?></p>
                    </div>
                <!-- /.table-responsive -->
                
                </div>
            <!-- /.panel-body -->
            </div>
        <!-- /.panel -->
        </div>
    
    </div>
    <div class="row" style="text-align: right; padding-right: 30px;">
        <p>Nhân viên bán hàng:</p>
        <p><?=$employee['TenNV']?></p>
    </div>
    <button onclick="myFunction()" class="btn btn-primary">in hóa đơn</button>
<!-- /.row -->


</div>
<script>
function myFunction() {
    window.print();
}
</script>


<?php include_once('views/admin/layouts_admin/footer.php'); ?>