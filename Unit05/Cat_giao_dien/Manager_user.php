<?php
    include_once('layouts/header.php');

?>

     
           <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Quan ly nguoi dung</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            DataTables Advanced Tables
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Ten nguoi dung</th>
                                        <th>Email</th>
                                        <th>Luot xem</th>
                                        <th>Hanh dong</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="odd gradeX">
                                        <td>1</td>
                                        <td>Tran Hoang Long</td>
                                        <td>Longtran@gmail.com</td>
                                        <td class="center">4</td>
                                        <td class="center">
                                            <button class="btn-primary">Xem</button>
                                            <button class="btn-primary">Sua</button>
                                            <button class="btn-primary">Xoa</button>
                                        </td>
                                    </tr>
                                    
                                   
                                    <tr class="gradeC">
                                        <td>2</td>
                                        <td>Pham Anh Hoang</td>
                                        <td>Hoangpham@gmail.com</td>
                                        <td class="center">45</td>
                                        <td class="center">
                                            <button class="btn-primary">Xem</button>
                                            <button class="btn-primary">Sua</button>
                                            <button class="btn-primary">Xoa</button>
                                        </td>
                                    </tr>
                                    <tr class="gradeU">
                                        <td>3</td>
                                        <td>Mai Phuong Thuy</td>
                                        <td>thuymai@gmail.com</td>
                                        <td class="center">33</td>
                                        <td class="center">
                                            <button class="btn-primary">Xem</button>
                                            <button class="btn-primary">Sua</button>
                                            <button class="btn-primary">Xoa</button>
                                        </td>
                                    </tr>
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
            <div class="row">
                <div class="col-lg-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Kitchen Sink
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Username</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>@mdo</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Jacob</td>
                                            <td>Thornton</td>
                                            <td>@fat</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Larry</td>
                                            <td>the Bird</td>
                                            <td>@twitter</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-6 -->
                <div class="col-lg-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Basic Table
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Username</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>@mdo</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Jacob</td>
                                            <td>Thornton</td>
                                            <td>@fat</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Larry</td>
                                            <td>the Bird</td>
                                            <td>@twitter</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-6 -->
            </div>
            <!-- /.row -->
            
    

 <?php
    include_once('layouts/footer.php');
    
?>