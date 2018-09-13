<?php
// cấu hình thông tin do google cung cấp
    $api_url     = 'https://www.google.com/recaptcha/api/siteverify';
    $site_key    = '6LdDTloUAAAAAD0LDtZB5OqTFfCisnaRwfdjrEdN';
    $secret_key  = '6LdDTloUAAAAAJjNrKLDG_H16aOCSuQKDla1FiBB';
    session_start();
   // session_destroy();
    include_once('../email/mail.php');
    


    

    // kiem tra submit form
    if(isset($_POST['submit']))
    {
        // lấy dữ liệu được post lên
        $site_key_post    = $_POST['g-recaptcha-response'];
          
        // lấy IP của khach
        if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
            $remoteip = $_SERVER['HTTP_CLIENT_IP'];
        } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $remoteip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        } else {
            $remoteip = $_SERVER['REMOTE_ADDR'];
        }
         
        // tạo link kết nối
        $api_url = $api_url.'?secret='.$secret_key.'&response='.$site_key_post.'&remoteip='.$remoteip;
        // lấy kết quả trả về từ google
        $response = file_get_contents($api_url);
        // dữ liệu trả về dạng json
        $response = json_decode($response);
        if(!isset($response->success))
        {
            echo 'Captcha khong dung';
        }
        if($response->success == true)
        {   
            if (isset($_POST['name'])) {
                $name = $_POST['name'];
                $phone = $_POST['phone'];
                $email = $_POST['email'];
                $password = $_POST['password'];
                if(isset($_POST['gender'])){
                    $gender = $_POST['gender'];
                }  else {
                    $gender = false;
                }
                $address = $_POST['address'];
            }

            $arr = array( 'name' => $name,'phone' => $phone, 'email' => $email,'password' => $password ,'gender' => $gender, 'address' => $address  );
            $_SESSION['user'] = $arr;

            $message = "Thông tin đã được lưu  !";
            echo "<script type='text/javascript'>alert('$message');</script>";
           // var_dump($_SESSION['user']);
            // echo "<pre>";

            //     print_r($_SESSION['user']);
            // echo"</pre>";


        

            $contents = "
                Họ tên : '$name',
                Số điẹn thoại : '$phone',
                Email : '$email'.
                Password : '$password'.
                Giới tính : '$gender', 
                Địa chỉ : '$address'
            ";
            send_email($email, "", $contents, "Đăng ký khóa học PHP");


        }else{
           echo "Captcha không đúng";
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
        <p>ZENTGROUP - PHP - MYSQL</p>
        <form action="" method="POST" role="form" id="form-register">
            
        
            <div class="form-group">
                <label for="">Họ và tên</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Nhập vào Họ và Tên" required>
            </div>
            <div class="form-group">
                <label for="">Số điện thoại</label>
                <input type="text" class="form-control" id="phone" name="phone" placeholder="Nhập số điện thoại" required>
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Nhập email" required>
            </div>
            <div class="form-group">
                <label for="">Password</label>
                <input type="password" class="form-control" id="password" name= "password" placeholder="Nhập Password" required>
            </div>
            <div class="form-group">
                
                <label for="">Giới tính</label><br>
                <input type="radio"  name="gender" value="Nam" >Male
                <input type="radio"  name="gender" value="Nữ" >Female
                <input type="radio" name="gender" value="Chưa xác định" >Orther
                
            </div>
            <div class="form-group">
                <label for="">Địa chỉ</label>
                <input type="text" class="form-control" id="address" name="address" placeholder="Nhập vào địa chỉ" required>
            </div>
        
            <div class="g-recaptcha" data-sitekey="<?php echo $site_key?>"></div>
        
            <button type="submit" class="btn btn-primary" name="submit">Lưu thông tin</button>
        </form>
    </div>

   
    

    
</body>
</html>