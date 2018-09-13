

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
                            Danh sách hóa đơn
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Mã hóa đơn</th>
                                        <th>Mã khách hàng</th>
                                        <th>Mã nhân viên</th>
                                        <th>Ngày bán</th>
                                        <th>Tổng tiền</th>
                                        <th>Trạng thái</th>
                                        <th>#</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($data as $row ) { ?>
                                    <tr>
                                        <td align="center"><?= $row["MaHD"]?></td>
                                        <td align="center"><?= $row["MaKH"]?></td>
                                        <td align="right"><?= $row["MaNV"]?></td>
                                        <td align="center"><?= $row["NgayBan"]?></td>
                                        <td align="center"><?= $row["TongTien"]?></td>
                                         <td align="center">
                                            <?php  
                                            if($row["TrangThai"]==1) echo"Đã thanh toán"; else echo "Chưa thanh toán";?></td>
                                        <td>
                                            <a class="btn btn-success" href="?mod=manager&act=detail&MaHD=<?=$row["MaHD"]?>"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                            <a <?php  
                                            if($row["TrangThai"]==1) echo"disabled"; ?> href="?mod=sale&act=updatebill&MaHD=<?=$row["MaHD"]?>" class="btn btn-warning">Xử lý</a>
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
 <?php include_once('views/admin/layouts_admin/footer.php'); ?>