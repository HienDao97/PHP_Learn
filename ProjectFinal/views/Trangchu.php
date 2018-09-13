
<?php
    include_once('layouts/header.php');

?>
    
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="public/source/image/banner/banner1.jpg" alt="First slide" width="100%" height="439px">
              <div class="carousel-caption d-none d-md-block">
                <!-- <h5 style="color:   #4dff4d; font-weight: bold; text-align: left;">Ưu đãi mùa hè</h5>
                <p style="font-weight: bold; text-decoration: underline; font-size: 25px;color: #ffcc00;text-align: left;">Sale off 20%</p> -->
              </div>
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="public/source/image/banner/banner2.jpg" alt="Second slide" width="100%" height="439px">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="public/source/image/banner/banner3.jpg" alt="Third slide" width="100%" height="439px">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
    
        <div class="container">
            <div id="content" class="space-top-none">
                <div class="main-content">
                    <div class="space60">&nbsp;</div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="beta-products-list">
                                <h4>New Products</h4>
                               <!--  <div class="beta-products-details">
                                    <p class="pull-left">438 styles found</p>
                                    <div class="clearfix"></div>
                                </div> -->

                                 <div class="row"> 
                                    <?php foreach ($data as $product) {?>
                                        <div class="col-sm-3" style="padding-bottom: 30px;">
                                            <div class="single-item">
                                                <div class="single-item-header">
                                                    <a href="product.html"><img src="<?=$product['image']?>" alt="" style="width: 255px; height: 255px;" ></a>
                                                </div>
                                                <div class="single-item-body">
                                                    <p class="single-item-title"><?=$product['TenSP']?></p>
                                                    <p class="single-item-price">
                                                        <span><?=number_format($product['DonGia'])?><sup style="top: -10px; font-size: 20px;">đ</sup></span>
                                                    </p>
                                                </div>
                                                <div class="single-item-caption">
                                                    <a class="add-to-cart pull-left" href="?mod=home&act=addtocart&MaSP=<?=$product['MaSP']?>"><i class="fa fa-shopping-cart"></i></a>
                                                    <a class="beta-btn primary" href="?mod=home&act=product_detail&MaSP=<?=$product['MaSP']?>">Details <i class="fa fa-chevron-right"></i></a>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>
                                    </div>
                                    <?php } ?>
                                    
                                    <!-- <div class="col-sm-3">
                                        <div class="single-item">
                                            <div class="ribbon-wrapper"><div class="ribbon sale">Sale</div></div>

                                            <div class="single-item-header">
                                                <a href="product.html"><img src="public/source/image/product/Originals/tra-sua-panda.jpg" alt=""></a>
                                            </div>
                                            <div class="single-item-body">
                                                <p class="single-item-title">Sample Woman Top</p>
                                                <p class="single-item-price">
                                                    <span class="flash-del">$34.55</span>
                                                    <span class="flash-sale">$33.55</span>
                                                </p>
                                            </div>
                                            <div class="single-item-caption">
                                                <a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
                                                <a class="beta-btn primary" href="product.html">Details <i class="fa fa-chevron-right"></i></a>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="single-item">
                                            <div class="single-item-header">
                                                <a href="product.html"><img src="public/source/image/product/Originals/tra-sua-panda.jpg" alt=""></a>
                                            </div>
                                            <div class="single-item-body">
                                                <p class="single-item-title">Sample Woman Top</p>
                                                <p class="single-item-price">
                                                    <span>$34.55</span>
                                                </p>
                                            </div>
                                            <div class="single-item-caption">
                                                <a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
                                                <a class="beta-btn primary" href="product.html">Details <i class="fa fa-chevron-right"></i></a>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="single-item">
                                            <div class="single-item-header">
                                                <a href="product.html"><img src="public/source/image/product/Originals/tra-sua-panda.jpg" alt=""></a>
                                            </div>
                                            <div class="single-item-body">
                                                <p class="single-item-title">Sample Woman Top</p>
                                                <p class="single-item-price">
                                                    <span>$34.55</span>
                                                </p>
                                            </div>
                                            <div class="single-item-caption">
                                                <a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
                                                <a class="beta-btn primary" href="product.html">Details <i class="fa fa-chevron-right"></i></a>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </div> -->
                                </div>
                            </div> <!-- .beta-products-list -->

                            <div class="space50">&nbsp;</div>

                            <!-- <div class="beta-products-list">
                                <h4>Top Products</h4>
                                <div class="beta-products-details">
                                    <p class="pull-left">438 styles found</p>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="single-item">
                                            <div class="single-item-header">
                                                <a href="product.html"><img src="public/source/image/product/Originals/tra-sua-panda.jpg" alt=""></a>
                                            </div>
                                            <div class="single-item-body">
                                                <p class="single-item-title">Sample Woman Top</p>
                                                <p class="single-item-price">
                                                    <span>$34.55</span>
                                                </p>
                                            </div>
                                            <div class="single-item-caption">
                                                <a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
                                                <a class="beta-btn primary" href="product.html">Details <i class="fa fa-chevron-right"></i></a>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="single-item">
                                            <div class="ribbon-wrapper"><div class="ribbon sale">Sale</div></div>

                                            <div class="single-item-header">
                                                <a href="product.html"><img src="public/source/image/product/Originals/tra-sua-panda.jpg" alt=""></a>
                                            </div>
                                            <div class="single-item-body">
                                                <p class="single-item-title">Sample Woman Top</p>
                                                <p class="single-item-price">
                                                    <span class="flash-del">$34.55</span>
                                                    <span class="flash-sale">$33.55</span>
                                                </p>
                                            </div>
                                            <div class="single-item-caption">
                                                <a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
                                                <a class="beta-btn primary" href="product.html">Details <i class="fa fa-chevron-right"></i></a>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="single-item">
                                            <div class="single-item-header">
                                                <a href="product.html"><img src="public/source/image/product/Originals/tra-sua-panda.jpg" alt=""></a>
                                            </div>
                                            <div class="single-item-body">
                                                <p class="single-item-title">Sample Woman Top</p>
                                                <p class="single-item-price">
                                                    <span>$34.55</span>
                                                </p>
                                            </div>
                                            <div class="single-item-caption">
                                                <a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
                                                <a class="beta-btn primary" href="product.html">Details <i class="fa fa-chevron-right"></i></a>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="single-item">
                                            <div class="single-item-header">
                                                <a href="product.html"><img src="public/source/image/product/Originals/tra-sua-panda.jpg" alt=""></a>
                                            </div>
                                            <div class="single-item-body">
                                                <p class="single-item-title">Sample Woman Top</p>
                                                <p class="single-item-price">
                                                    <span>$34.55</span>
                                                </p>
                                            </div>
                                            <div class="single-item-caption">
                                                <a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
                                                <a class="beta-btn primary" href="product.html">Details <i class="fa fa-chevron-right"></i></a>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="space40">&nbsp;</div>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="single-item">
                                            <div class="single-item-header">
                                                <a href="product.html"><img src="public/source/image/product/Originals/tra-sua-panda.jpg" alt=""></a>
                                            </div>
                                            <div class="single-item-body">
                                                <p class="single-item-title">Sample Woman Top</p>
                                                <p class="single-item-price">
                                                    <span>$34.55</span>
                                                </p>
                                            </div>
                                            <div class="single-item-caption">
                                                <a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
                                                <a class="beta-btn primary" href="product.html">Details <i class="fa fa-chevron-right"></i></a>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="single-item">
                                            <div class="ribbon-wrapper"><div class="ribbon sale">Sale</div></div>

                                            <div class="single-item-header">
                                                <a href="product.html"><img src="public/source/image/product/Originals/tra-sua-panda.jpg" alt=""></a>
                                            </div>
                                            <div class="single-item-body">
                                                <p class="single-item-title">Sample Woman Top</p>
                                                <p class="single-item-price">
                                                    <span class="flash-del">$34.55</span>
                                                    <span class="flash-sale">$33.55</span>
                                                </p>
                                            </div>
                                            <div class="single-item-caption">
                                                <a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
                                                <a class="beta-btn primary" href="product.html">Details <i class="fa fa-chevron-right"></i></a>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="single-item">
                                            <div class="single-item-header">
                                                <a href="product.html"><img src="public/source/image/product/Originals/tra-sua-panda.jpg" alt=""></a>
                                            </div>
                                            <div class="single-item-body">
                                                <p class="single-item-title">Sample Woman Top</p>
                                                <p class="single-item-price">
                                                    <span>$34.55</span>
                                                </p>
                                            </div>
                                            <div class="single-item-caption">
                                                <a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
                                                <a class="beta-btn primary" href="product.html">Details <i class="fa fa-chevron-right"></i></a>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="single-item">
                                            <div class="single-item-header">
                                                <a href="product.html"><img src="public/source/image/product/Originals/tra-sua-panda.jpg" alt=""></a>
                                            </div>
                                            <div class="single-item-body">
                                                <p class="single-item-title">Sample Woman Top</p>
                                                <p class="single-item-price">
                                                    <span>$34.55</span>
                                                </p>
                                            </div>
                                            <div class="single-item-caption">
                                                <a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
                                                <a class="beta-btn primary" href="product.html">Details <i class="fa fa-chevron-right"></i></a>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> --> <!-- .beta-products-list -->
                        </div>
                    </div> <!-- end section with sidebar and main content -->


                </div> <!-- .main-content -->
            </div> <!-- #content -->
        </div> <!-- .container -->


               <?php 
if (isset($_COOKIE['true'])) {?>
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
        toastr.success('Thêm thành công !');
    </script>
    <?php }
    ?>

        <?php  if (isset($_COOKIE['error'])) {?>

    <script type="text/javascript">
        toastr.options = {
  "closeButton": true,
  "debug": false,
  "newestOnTop": false,
  "progressBar": false,
  "positionClass": "toast-bottom-right",
  "preventDuplicates": false,
  "onclick": null,
  "showDuration": "300",
  "hideDuration": "1000",
  "timeOut": "5000",
  "extendedTimeOut": "1000",
  "showEasing": "swing",
  "hideEasing": "linear",
  "showMethod": "fadeIn",
  "hideMethod": "fadeOut"
}
        toastr.error('Số lượng trong kho hàng không đủ !');
    </script>
    <?php }
    ?>


<?php
    include_once('layouts/footer.php');

?>