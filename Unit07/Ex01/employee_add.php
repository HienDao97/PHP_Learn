<?php 

require_once('layouts/connection.php');
    if(isset($_POST['creat'])){
        $MaNV = $_POST['MaNV'];
        $TenNV= $_POST['TenNV'];
        $SDT= $_POST['SDT'];
        $Email= $_POST['Email'];
        $MatKhau= md5($_POST['MatKhau']);


        $query ="INSERT INTO nhanvien (MaNV,TenNV,SDT,Email,MatKhau)
                    VALUES ('".$MaNV."','".$TenNV."','".$SDT."','".$Email."','".$MatKhau."')";

        // var_dump($query);
        // die;


    // thuc thi cau lenh truy van co so du lieu

    $status = $conn->query($query);
    var_dump($status) ;

    if($status==true){
        setcookie('msg','Thêm nhân viên thành công',time()+5);
    }else{
        setcookie('msg','Thêm nhân viên không thành công',time()+5);
    }
    

    header('Location:employees.php');



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
        <h3>THÊM NHÂN VIÊN</h3>
        <form action="" method="POST" role="form" id="form-register">
            
        
            <div class="form-group">
                <label for="">Mã nhân viên</label>
                <input type="text" class="form-control" id="" name="MaNV" placeholder="nhập mã" required>
            </div>
            <div class="form-group">
                <label for="">Tên nhân viên</label>
                <input type="text" class="form-control" id="" name="TenNV" placeholder=" Nhập tên" required>
            </div>
            <div class="form-group">
                <label for="">SDT</label>
                <input type="text" class="form-control" id="" name="SDT" placeholder="Nhập sdt" required>
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="text" class="form-control" id="" name= "Email" placeholder="Nhập email" required>
            </div>
            <div class="form-group">
                <label for="">Mật khẩu</label>
                <input type="text" class="form-control" id="" name= "MatKhau" placeholder="Nhập mật khẩu" required>
            </div>
            
            
        
            <button type="submit" class="btn btn-primary" name="creat">Thêm nhân viên</button>
        </form>
    </div>

   
    

    
</body>
</html>