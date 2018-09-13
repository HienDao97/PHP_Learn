<?php 
include_once('layouts/header.php');
include_once('layouts/connection.php');
$query="SELECT * from sanpham";
$result = $conn->query($query);
 ?>

 

       
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Tables</h1>
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
                        <a class="btn btn-link" href="product_add.php" style="color: red; font-weight: bold;">Thêm sản phẩm</a>
						<p><?php if(isset($_COOKIE['msg'])) echo $_COOKIE['msg']; ?></p>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Mã sản phẩm</th>
                                        <th>Tên sản phẩm</th>
                                        <th>Số lượng</th>
                                        <th>Đơn giá</th>
                                        <th>#</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php while($row= $result->fetch_assoc()){?>
					    		 	<tr>
					    		 		<td align="center"><?= $row["MaSP"]?></td>
					    		 		<td align="center"><?= $row["TenSP"]?></td>
					    		 		<td align="right"><?= number_format($row["DonGia"])?></td>
					    		 		<td align="center"><?= $row["SoLuong"]?></td>
					    		 		<td>
					    		 			<a class="btn btn-success" href="product_detail.php?MaSP=<?= $row["MaSP"]?>">Xem </a>
					    		 			<a class="btn btn-danger" href="product_edit.php?MaSP=<?= $row["MaSP"]?>">Sửa</a>
					    		 			<a class=" btn btn-default" onclick="return confirm('Are you sure ?')" href="product_delete.php?MaSP=<?= $row["MaSP"]?>">Xóa</a>
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
           
         
           
      
        <?php include_once('layouts/footer.php'); ?>