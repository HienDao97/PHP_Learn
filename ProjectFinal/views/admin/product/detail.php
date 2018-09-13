

<?php include_once('views/admin/layouts_admin/header.php'); ?>




<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Quản lý sản phẩm</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Chi tiết sản phẩm
                </div>


                        <div class="container" style="margin-top: 35px;">
                            <div id="content">
                                <div class="row">
                                    <div class="col-sm-9">

                                        <div class="row">
                                            <div class="col-sm-4">
                                                <img src="<?=$product["image"]?>" alt="" style="width: 100%;">
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="single-item-body">
                                                     <p class="single-item-title" style="font-weight: bold;">Loại sản phẩm: <span style="color: blue;"><?=$product["Ten_Loai_SP"]?></span> </p>
                                                    <p class="single-item-title" style="font-weight: bold;">Tên sản phẩm: <span style="color: blue;"><?=$product["TenSP"]?></span> </p>
                                                    <p class="single-item-price" style="font-weight: bold;">Gía bán:
                                                        <span style="color: red;"><?=number_format($product["DonGia"])?></span>  <sup>đ</sup>
                                                    </p>
                                                </div>

                                <!-- <div class="clearfix"></div>
                                    <div class="space20">&nbsp;</div> -->

                                    <div class="single-item-desc">
                                        <p > <span style="font-weight: bold;">Mô tả:</span> <br>
                                            <?=$product["GhiChu"]?>

                                        </p>
                                    </div>
                                    <div class="space20">&nbsp;</div>


                                </div>
                            </div>

                            <div class="space40">&nbsp;</div>

                            <div class="space50">&nbsp;</div>

                        </div>

                    </div>
                </div> <!-- #content -->
            </div> <!-- .container -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->


</div>
<?php include_once('views/admin/layouts_admin/footer.php'); ?>