<?php
// cấu hình thông tin do google cung cấp
    include_once('layouts/connection.php');
    session_start();

  
    // kiem tra submit form

    if(isset($_POST['submit']))
    {
        // lấy dữ liệu được post lên
         
           
               
                $email = $_POST['email'];
                $password = md5($_POST['password']) ;

               
                $query ="SELECT * from nhanvien WHERE Email = '".$email."' AND MatKhau = '".$password."'";


                $result = $conn->query($query);
                $status = $result->fetch_assoc();

                 

                if($status != null){
                    $_SESSION['isLogin']=1;
                    setcookie('msg','Đăng nhập thành công',time()+3);
                   
                    header('Location: trangchu.php');


                }else{
                    echo "Đăng nhập không thành công";
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

    <style>
        p{
            text-align: center;
            font-weight: bold;
            font-size: 20px;
            margin-top: 50px;

        }
        input{
            margin:5px;
        }
        
    </style>
    

</head>
<body>

    <div class="container">
        <p>ĐĂNG NHẬP</p>
        <form action="" method="POST" role="form" id="form-register">
            
        
            
            <div class="form-group">
                <label for="">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Nhập email" required>
            </div>
            <div class="form-group">
                <label for="">Password</label>
                <input type="password" class="form-control" id="password" name= "password" placeholder="Nhập Password" required>
            </div>
            
        
<!--            <div class="g-recaptcha" data-sitekey="<?php echo $site_key?>"></div> -->
        
            <button type="submit" class="btn btn-primary" name="submit">Đăng nhập</button>
        </form>
    </div>

   
    

    
</body>
</html>