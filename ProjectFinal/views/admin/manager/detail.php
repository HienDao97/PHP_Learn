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
					Chi tiết hóa đơn
				</div>
				<!-- /.panel-heading -->
				<div style="padding-left: 35px;">
					<h3 align="center">BILL DETAIL</h3>
					<p>Mã hóa đơn: <span>&nbsp &nbsp</span><?=$MaHD?> </p>
					<p>Mã nhân viên: <span>&nbsp &nbsp</span><?=$manager["MaNV"]?></p>
					<p>Tên khách hàng:<span>&nbsp &nbsp</span> <?=$customer["TenKH"]?></p>
					<p>Ngày bán:<span>&nbsp &nbsp</span><?=$manager["NgayBan"]?></p>
					
					

				</div>


                <!-- /.panel-heading -->
                <div class="panel-body">
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <td align="center">Mã sản phẩm</td>
                            <td align="center">Tên sản phẩm</td>
                            <td align="center">Số lượng mua</td>
                            <td align="center">Đơn Gía</td>
                            <td align="center">Thành tiền</td>
                            
                        </thead>
                        <tbody>
                            <?php  foreach ($data as $row ) {?>
                            <tr>
                                <td align="center"><?=$row["MaSP"]?></td>
                                <td align="center"><?=$row["TenSP"]?></td>
                                <td align="center"><?=$row["SLmua"]?></td>
                                
                                <td align="center"><?=$row["GiaBan"]?></td>
                                <td align="center"><?=$row["ThanhTien"]?></td>
                                
                         
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