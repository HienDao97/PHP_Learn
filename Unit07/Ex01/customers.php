<?php 
include_once('layouts/header.php');
include_once('layouts/connection.php');
$query="SELECT * from khachhang";
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
                            Danh sách khách hàng
                        </div>
                        <a class="btn btn-link" href="customer_add.php" style="color: red; font-weight: bold;">Thêm khách hàng</a>
						<p><?php if(isset($_COOKIE['msg'])) echo $_COOKIE['msg']; ?></p>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Mã khách hàng</th>
                                        <th>Tên khách hàng</th>
                                        <th>Số điện thoại</th>
                                        <th>Email</th>
                                        <th>Địa chỉ</th>
                                        <th>#</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php while($row= $result->fetch_assoc()){?>
                                    <tr>
                                        <td align="center"><?= $row["MaKH"]?></td>
                                        <td align="center"><?= $row["TenKH"]?></td>
                                        <td align="center"><?= $row["SDT"]?></td>
                                        
                                        <td align="center"><?= $row["Email"]?></td>
                                        <td align="center"><?= $row["DiaChi"]?></td>
                                        <td>
                                            <a class="btn btn-success" href="customer_detail.php?MaKH=<?= $row["MaKH"]?>">Xem </a>
                                            <a class="btn btn-danger" href="customer_edit.php?MaKH=<?= $row["MaKH"]?>">Sửa</a>
                                            <a class=" btn btn-info" onclick="return confirm('ARE YOU SURE?')" href="customer_delete.php?MaKH=<?= $row["MaKH"]?>">Xóa</a>
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