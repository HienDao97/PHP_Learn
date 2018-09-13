<?php
// cấu hình thông tin do google cung cấp
    $api_url     = 'https://www.google.com/recaptcha/api/siteverify';
    $site_key    = '6LdDTloUAAAAAD0LDtZB5OqTFfCisnaRwfdjrEdN';
    $secret_key  = '6LdDTloUAAAAAJjNrKLDG_H16aOCSuQKDla1FiBB';
    session_start();
   
    include_once('email/mail.php');
  
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
            if (isset($_POST['hoten'])) {
                $name = $_POST['hoten'];
                $phone = $_POST['sdt'];
                $email = $_POST['email'];
              
                if(isset($_POST['gender'])){
                    $gender = $_POST['gender'];
                }  else {
                    $gender = false;
                }
                $address = $_POST['diachi'];
            }

            $arr = array( 'hoten' => $name,'sdt' => $phone, 'email' => $email,'gender' => $gender, 'diachi' => $address  );
            $_SESSION['user'] = $arr;

            // $message = "Thông tin đã được gửi qua email  !";
            // echo "<script type='text/javascript'>alert('$message');</script>";
          
            // ob_start();
            // require_once('cart-info.html');
            // $contents= ob_get_contents();
            // ob_end_clean();


        

            $contents = "
                Họ tên : '$name',
                Số điẹn thoại : '$phone',
                Email : '$email'.
                Password : '$password'.
                Giới tính : '$gender', 
                Địa chỉ : '$address'
            ";
            send_email($email, $name, $contents, "Thông tin thanh toán");
            unset($_SESSION['cart']);
            header('Location:index.php');

        }else{
           echo "Captcha không đúng";
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Thông tin  khách hàng</title>
	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<script src="//code.jquery.com/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	<script src="https://www.google.com/recaptcha/api.js?hl=vi"></script>
</head>
<body>
	<div class="container">
		<form action="" method="POST" role="form"> 
            <legend>Thông tin khách hàng</legend>
            <div class="form-group">
                <label for="">Tên khách hàng</label>
                <input type="text" class="form-control" id="hoten" placeholder="Nhập họ và tên" name="hoten"  required="">
                
            </div>

            <div class="form-group">
                <label for="">Số điện thoại</label>
                <input type="text" class="form-control" id="sdt" placeholder="Nhập số điện thoại" name="sdt" required="">
                
            </div>

            <div class="form-group">
                <label for="">Email</label>
                <input type="Email" class="form-control" id="email" placeholder="Nhập email" name="email" required="" >
                
            </div> 
            <div class="form-group">
                
                <label for="">Giới tính</label><br>
                <input type="radio"  name="gender" value="Nam" >Male
                <input type="radio"  name="gender" value="Nữ" >Female
                <input type="radio" name="gender" value="Chưa xác định" >Orther
                
            </div> 
            <div class="form-group">
                <label for="">Địa chỉ</label>
                <input type="text" class="form-control" id="diachi" placeholder="Nhập địa chỉ" name="diachi" required="" >
                
            </div>

            <div class="g-recaptcha" data-sitekey="<?= $site_key ?>"></div>

            <button type="submit" id="next-btn" class="btn btn-primary" name="submit">Đặt hàng</button>
            <!-- <button class="btn btn-warning"><a style="color: white;" href="index.php">Về trang chính</a></button> -->
        </form>
	</div>
	
</body>
</html>