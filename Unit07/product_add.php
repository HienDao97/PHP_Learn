<?php 

require_once('connection.php');
        $MaSP ='' ;
        $TenSP= '';
        $SoLuong='';
        $DonGia= '';
    if(isset($_POST['creat'])){
        $MaSP = $_POST['MaSP'];
        $TenSP= $_POST['TenSP'];
        $SoLuong= $_POST['SoLuong'];
        $DonGia= $_POST['DonGia'];

        $query ="SELECT COUNT(*) AS Num_row from sanpham WHERE MaSP = '".$MaSP."'";

        $result = $conn->query($query)->fetch_assoc()['Num_row'];
        var_dump($result);
        
        if($result>=1){
            echo "Ma san pham da ton tai";
            
        }else{
            $query ="INSERT INTO sanpham (MaSP,TenSP,SoLuong,DonGia)
                    VALUES ('".$MaSP."','".$TenSP."','".$SoLuong."','".$DonGia."')";


        // thuc thi cau lenh truy van co so du lieu

            $status = $conn->query($query);
            var_dump($status) ;

            if($status==true){
                setcookie('msg','Them moi thanh cong',time()+5);
            }else{
                setcookie('msg','Them moi khong thanh cong',time()+5);
            }
            

            header('Location: products.php');
        }
    

        



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
                <label for="">Ma San Pham</label>
                <input type="text" class="form-control" id="" name="MaSP" value="<?=$MaSP?>" placeholder="" required>
            </div>
            <div class="form-group">
                <label for="">Ten San Pham</label>
                <input type="text" class="form-control" id="" name="TenSP" value="<?=$TenSP?>" placeholder="" required>
            </div>
            <div class="form-group">
                <label for="">So Luong</label>
                <input type="text" class="form-control" id="" name="SoLuong" value="<?=$SoLuong?>"  placeholder="" required>
            </div>
            <div class="form-group">
                <label for="">Don Gia</label>
                <input type="text" class="form-control" id="" name= "DonGia" value="<?=$DonGia?>"   placeholder="" required>
            </div>
            
            
        
            <button type="submit" class="btn btn-primary" name="creat">Them San Pham</button>
        </form>
    </div>

   
    

    
</body>
</html>