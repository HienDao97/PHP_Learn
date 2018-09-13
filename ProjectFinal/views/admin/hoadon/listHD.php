

<?php include_once('views/admin/layouts_admin/header.php'); ?>




<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Quản lý hóa đơn</h1>
            <p>-Vui lòng tìm khách hàng , sau đó click vào Tạo hóa đơn.</p>
            <p>-Nếu chưa có thông tin khách hàng, vui lòng tạo mới khách hàng trước.</p>
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
                <div class="panel-body">
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <td align="center">Ma khach hang</td>
                            <td align="center">Ten khach hang</td>
                            <td align="center">So dien thoai</td>
                            <td align="center">Email</td>
                            <td align="center">Dia chi</td>
                            <td align="center">Gioi tính</td>
                            <td align="center">Hanh dong</td> 
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
                                <a class="btn btn-success" href="?mod=sale&act=purchase&MaKH=<?=$row['MaKH']?>">Tạo hóa đơn</a>
                                
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


<?php include_once('views/admin/layouts_admin/footer.php'); ?>