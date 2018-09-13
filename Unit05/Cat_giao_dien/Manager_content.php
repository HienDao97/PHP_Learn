<?php
    include_once('layouts/header.php');

?>

     
         <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Quan ly bai viet</h1>
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
                                        <th>#</th>
                                        <th>Tieu de bai viet</th>
                                        <th>Mo ta</th>
                                        <th>Luot xem</th>
                                        <th>Hanh dong</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="odd gradeX">
                                        <td>1</td>
                                        <td>He dieu hanh</td>
                                        <td>Windown 10</td>
                                        <td class="center">4</td>
                                        <td class="center">
                                            <button class="btn-primary">Xem</button>
                                            <button class="btn-primary">Sua</button>
                                            <button class="btn-primary">Xoa</button>
                                        </td>
                                    </tr>
                                    
                                   
                                    <tr class="gradeC">
                                        <td>1</td>
                                        <td>PSP browser</td>
                                        <td>PSP</td>
                                        <td class="center">5</td>
                                        <td class="center">
                                            <button class="btn-primary">Xem</button>
                                            <button class="btn-primary">Sua</button>
                                            <button class="btn-primary">Xoa</button>
                                        </td>
                                    </tr>
                                    <tr class="gradeU">
                                        <td>3</td>
                                        <td>All others</td>
                                        <td>IoT</td>
                                        <td class="center">3</td>
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
           
            
    

 <?php
    include_once('layouts/footer.php');
    
?>