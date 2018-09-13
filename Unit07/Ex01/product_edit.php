<?php 

require_once('layouts/connection.php');
    // lay ma san pham can xem 
    $maSP =$_GET['MaSP'];

    // cau lenh truy van co so du lieu

    $query ="SELECT * from sanpham WHERE MaSP = '".$maSP."'";

   
    // thuc thi cau lenh truy van co so du lieu
// truy van co so de lay du lieu dua ra form
    $result = $conn->query($query);
   
    $product = $result->fetch_assoc();


     if(isset($_POST['Update'])){
        $MaSP = $_POST['MaSP'];
        $TenSP= $_POST['TenSP'];
        $SoLuong= $_POST['SoLuong'];
        $DonGia= $_POST['DonGia'];

        $query ="UPDATE sanpham SET MaSP='$MaSP',TenSP='$TenSP',SoLuong='$SoLuong',DonGia='$DonGia' WHERE MaSP = '$maSP'";

       
        // thuc thi cau lenh truy van co so du lieu

            $status = $conn->query($query);
            var_dump($status) ;

            if($status==true){
                setcookie('msg','Update thanh cong',time()+5);
            }else{
                setcookie('msg','Update khong thanh cong',time()+5);
            }
            

            header('Location: products.php');
        }
    


 ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <!-- Latest compiled and minified CSS & JS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/jquery.validate.min.js"></script>

    
</head>
<body>

    <div class="container">
        <h3>THEM SAN PHAM</h3>
        <form action="" method="POST" role="form" id="form-register">
            
        
            <div class="form-group">
                <label for="">Mã sản phẩm</label>
                <input type="text" class="form-control" id="" name="MaSP" value="<?=$product['MaSP']?>" placeholder="" required>
            </div>
            <div class="form-group">
                <label for="">Tên sản phẩm</label>
                <input type="text" class="form-control" id="" name="TenSP" value="<?=$product['TenSP']?>" placeholder="" required>
            </div>
            <div class="form-group">
                <label for="">Số lượng</label>
                <input type="text" class="form-control" id="" name="SoLuong" value="<?=$product['SoLuong']?>"  placeholder="" required>
            </div>
            <div class="form-group">
                <label for="">Đơn giá</label>
                <input type="text" class="form-control" id="" name= "DonGia" value="<?=$product['DonGia']?>"   placeholder="" required>
            </div>
            
            
        
            <button type="submit" class="btn btn-primary" name="Update">UPDATE</button>
        </form>
    </div>

   
    

    
</body>
</html>