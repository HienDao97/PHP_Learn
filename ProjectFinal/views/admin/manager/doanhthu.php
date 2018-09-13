<?php include_once('views/admin/layouts_admin/header.php'); ?>

<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Thống kê doanh thu</h1>
            
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Danh sách doanh thu
                    <p>Vui lòng chọn thòi gian</p>
                    <div>
                    	<form method="post" action="?mod=manager&act=doanhthu">
							  	<select name="thang">
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
									<option value="6">6</option>
									<option value="7">7</option>
									<option value="8">8</option>
									<option value="9">9</option>
									<option value="10">10</option>
									<option value="11">11</option>
									<option value="12">12</option>
													  
							 	</select>
  							<input type="submit" value="Chọn tháng"/>
						</form>
                    	
                    </div>
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <h3 style="color: red; ">Doanh thu bán hàng của nhân viên</h3>
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <td align="center">Mã nhân viên</td>
                            <td align="center">Tên nhân viên</td>
                            <td align="center">Doanh thu</td>
                            
                            
                        </thead>
                        <tbody>
                         <?php  foreach ($data as $row ) {?>
                         <tr>
                            <td align="center" ><?= $row["MaNV"]?></td>
                            <td align="center"><?= $row["TenNV"]?></td>
                            <td align="center"><?= number_format($row["TONG"])?></td>
                            
                        
                            
                        </tr>
                        <?php } ?>
                    </tbody>
                    
                    </table>
                    <!-- /.table-responsive -->
                <div>
                	<p style="font-weight: bold;">Tổng doanh thu tháng <span><?=$thang?></span>:&nbsp <?=number_format($tongthang)?>VND</p>
                </div>

                <div class="panel-body">
                    <h3 style="color: red; ">Top 5 sản phẩm bán chạy tháng <?=$thang?></h3>
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <td align="center">Mã sản phẩm</td>
                            <td align="center">Tên sản phẩm</td>
                            <td align="center">Đơn giá</td>
                            <td align="center">Số lượng đã bán</td>
                            
                            
                        </thead>
                        <tbody>
                         <?php  foreach ($output as $row ) {?>
                         <tr>
                            <td align="center" ><?= $row["MaSP"]?></td>
                            <td align="center"><?= $row["TenSP"]?></td>
                            <td align="center"><?= number_format($row["DonGia"])?></td>
                            <td align="center"><?= $row["TONG"]?></td>
                            
                        
                            
                        </tr>
                        <?php } ?>
                    </tbody>
                    
                    </table>
                    <!-- /.table-responsive -->
                <div>
                   
                </div>
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