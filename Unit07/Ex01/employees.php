<?php 
include_once('layouts/header.php');
include_once('layouts/connection.php');
$query="SELECT * from nhanvien";
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
                            Danh sách nhân viên
                        </div>
                        <a class="btn btn-link" href="employee_add.php" style="color: red; font-weight: bold;">Thêm nhân viên</a>
                        <p><?php if(isset($_COOKIE['msg'])) echo $_COOKIE['msg']; ?></p>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Mã nhân viên</th>
                                        <th>Tên nhân viên</th>
                                        <th>Số điện thoại</th>
                                        <th>Email</th>
                                        <th>Mật khẩu</th>
                                        <th>#</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php while($row= $result->fetch_assoc()){?>
                                    <tr>
                                        <td align="center"><?= $row["MaNV"]?></td>
                                        <td align="center"><?= $row["TenNV"]?></td>
                                        <td align="center"><?= $row["SDT"]?></td>
                                        
                                        <td align="center"><?= $row["Email"]?></td>
                                        <td align="center"><?= $row["MatKhau"]?></td>
                                        <td>
                                            <a class="btn btn-success" href="employee_detail.php?MaNV=<?= $row["MaNV"]?>">Xem</a>
                                            <a class="btn btn-danger" href="employee_edit.php?MaNV=<?= $row["MaNV"]?>">Sửa</a>
                                            <a class=" btn btn-info" onclick="return confirm('ARE  YOU SURE ?')" href="employee_delete.php?MaNV=<?= $row["MaNV"]?>">Xóa</a>
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