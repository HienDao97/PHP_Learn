<?php 
	session_start();
	//session_destroy();
	// echo "<pre>";
	//  	print_r($_SESSION['cart']);
	//  echo "</pre>";

 ?>

 <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Form</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <!-- <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script> -->
    <!-- Latest compiled and minified CSS & JS -->
   
    <script src="//code.jquery.com/jquery.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
    <div class="container">
        <?php 
            if(isset($_COOKIE['msg'])){?>
            <script>
                toastr["warning"](" xoa thanh cong!", "Thong bao")
            </script>
            <?php }
         ?>
		<h3>Danh sach san pham trong gio hang </h3>
		<a href="vidu.php">Tro lai trang chu >></a>
    	<table class="table">
    		<tr>
    			<td align="center">Ma san pham</td>
    			<td align="center">Ten san pham</td>
    			<td align="center">Don gia</td>
    			<td align="center">So luong</td>
    			<td align="center">Thanh tien</td>
    			<!-- <td>#</td> -->
    		</tr>


    		<?php 
    		$sum = 0;
    		foreach ($_SESSION['cart'] as $product) {
    			$sum+=$product[2]*$product[3];
    			?>
    		 	<tr>
    		 		<td align="center"><?= $product[0]?></td>
    		 		<td align="center"><?= $product[1]?></td>
    		 		<td align="right"><?= number_format($product[2])?></td>
    		 		<td align="center"><a class="btn btn-primary" href="add2cart.php?code=<?= $product[0]?>">+</a><?= $product[3]?><a class="btn btn-primary" href="delete.php?code=<?= $product[0]?>">-</a></td>
    		 		<td align="right"><?= number_format($product[2]*$product[3])?></td>
    		 		<td><a href="remove.php?code=<?= $product[0]?>" class="btn btn-warning delete">Delete</a></td>
    		 		
    		 	
    		 	</tr>
    		<?php } ?>
    		<tr>
    			<td colspan="4" align="right">Tong tien</td>
    			<td align="right"><?= number_format($sum)?></td>
    		</tr>
			
    	</table>
    </div>

    <script>
                $('.delete').click(function(e){
                    e.preventDefault();
                    var url = $(this).attr('href');
                    console.log(url);

                    swal({
                      title: "Bạn có chắc chắn muốn xóa?",
                      text: "chọn ok để xóa, cancel để hủy",
                      icon: "warning",
                      buttons: true,
                      dangerMode: true,
                    })
                    .then((willDelete) => {
                      if (willDelete) {
                        // dong y Xoa
                        window.location.href=url;
                        swal("Ban da xoa thanh cong!", {
                              icon: "success",
                            });
                        
                      } else {
                        // khong xoa
                        swal("Bạn chọn không xóa!");
                      }
                    });

                });
        
    </script>
</body>
</html>


<!--  <script>
        $('.delete').click(function(e){
                    e.preventDefault();
                    var url = $(this).attr('href');
                    console.log(url);
                    swal({
                          title: "Are you sure?",
                          text: "Once deleted, you will not be able to recover this imaginary file!",
                          icon: "warning",
                          buttons: true,
                          dangerMode: true,
                        })
                        .then((willDelete) => {
                          if (willDelete) {
                            swal("Poof! Your imaginary file has been deleted!", {
                              icon: "success",
                            });
                          } else {
                            swal("Your imaginary file is safe!");
                          }
                        });

                        });
    </script> -->