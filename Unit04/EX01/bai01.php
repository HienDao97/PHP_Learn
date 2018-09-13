<?php 
$products = array(

  'SP01' => array('SP01','Book1','4000','10'),
  'SP02' => array('SP02','Book2','5000','20'),
  'SP03' => array('SP03','Book3','6000','30'),
  
);
$i=0;
foreach ($products as $product) {
    $i++;
    if($i==1){
         $code1 = $product[0];
    }
    if($i==2){
         $code2 = $product[0];
    }
    if($i==3){
         $code3 = $product[0];
    }
  
}


?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" >

    <title>Hello, world!</title>
    <style>
    .product:hover{
        text-decoration: none;
    }
</style>
</head>
<body>
    <div class="container" style="margin-top: 20px;">
        <h3>Danh sach san pham</h3>
        <a href="giohang.php">Xem danh sach gio hang</a>
      <div class="row">
        <div class="col-sm">

           <a href="detail.php?code=<?= $code1?>" target="_blank" data-code ="SP01"  class="product" title="Minh la ca, viec cua minh la boi .">
            <div class="img">
                <img src="images\img765.gif" alt="" width="100%">
            </div>
            <div class="name">Minh la ca ...</div>
            <div class="rating">
                <span>
                    <img src="images\sao.png" alt="">
                    <img src="images\sao.png" alt="">
                    <img src="images\sao.png" alt="">
                    <img src="images\sao.png" alt="">
                </span>

            </div>
            <a href="addtocart.php?code=<?= $code1?>">Add to cart</a>

        </a>
        
    </div>
    <div class="col-sm">

       <a href="detail.php?code=<?= $code2?>" target="_blank" data-code ="SP02" class="product">
        <div class="img">
            <img src="images\img677.gif" alt="" width="100%">
        </div>
        <div class="name">Tren duong bang</div>
        <div class="rating">
            <span>
                <img src="images\sao.png" alt="">
                <img src="images\sao.png" alt="">
                <img src="images\sao.png" alt="">
                <img src="images\sao.png" alt="">
            </span>

        </div>
        <a href="addtocart.php?code=<?= $code2?>">Add to cart</a>
    </a>

</div>
<div class="col-sm">

   <a href="detail.php?code=<?= $code3?>" target="_blank" data-code ="SP03" class="product">
    <div class="img">
        <img src="images\img978.gif" alt="" width="100%">
    </div>
    <div class="name">Tuoi tre khong tri hoan</div>
    <div class="rating">
        <span>
            <img src="images\sao.png" alt="">
            <img src="images\sao.png" alt="">
            <img src="images\sao.png" alt="">
            <img src="images\sao.png" alt="">
        </span>

    </div>
    <a href="addtocart.php?code=<?= $code3?>">Add to cart</a>
</a>

</div>
</div>
</div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="js/jquery-3.3.1.slim.min.js" ></script>
<script src="js/popper.min.js" ></script>
<script src="js/bootstrap.min.js" ></script>
</body>
</html>

