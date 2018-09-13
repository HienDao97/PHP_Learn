<?php
// cấu hình thông tin do google cung cấp
    $api_url     = 'https://www.google.com/recaptcha/api/siteverify';
    $site_key    = '6LdDTloUAAAAAD0LDtZB5OqTFfCisnaRwfdjrEdN';
    $secret_key  = '6LdDTloUAAAAAJjNrKLDG_H16aOCSuQKDla1FiBB';
  


    

    // kiem tra submit form
    if(isset($_POST['login']))
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
            echo "";


        }else{
           echo "Captcha không đúng";
        }
    }
?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Đăng nhập</title>
	<script src="https://www.google.com/recaptcha/api.js?hl=vi"></script>
</head>
<style>
	
</style>
<body style="background-color: #dbf3ed;">
	<div class="container" style="background-image: url(image/login3.jpg); height:787px; background-repeat: no-repeat;margin-left: 80px; ">
		
		
		<div id="content" style="padding-left: 395px;padding-top: 200px;padding-right: 495px;">
			
			<form action="?mod=login&act=postLogin" method="post" class="beta-form-checkout">
				<div class="row">
					<div class="col-sm-3"></div>
					<div class="col-sm-6">
						<h2 style="text-align: center;">Đăng nhập</h2>
						<div class="space20">&nbsp;</div>

						
						<div class="form-block" style="margin-bottom: 40px;">
							<label for="email" style="font-size: 20px;">Email address*</label>
							<input style="width: 350px;height: 25px;border-radius: 15px;" type="text" class="form-control" id="" name="Email" placeholder="Nhập email" value="<?php if(isset($_COOKIE['oldmail'])){echo $_COOKIE['oldmail'];}?>"  required>
						</div>
						<div class="form-block" style="margin-bottom: 40px;">
							<label for="phone" style="font-size: 20px;">Password*</label>
							<span class="space20">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
							<input style="width: 350px;height: 25px;border-radius: 15px;" type="password" class="form-control" id="" name="MatKhau" placeholder="Nhập mật khẩu"  required>
						</div>
						<div style="padding-left: 130px; padding-bottom: 25px;" class="g-recaptcha" data-sitekey="<?php echo $site_key?>"></div>
						<div class="form-block" style="margin-bottom: 50px;">
							<input type="checkbox" name="" value="">remember password?
							<a href="" style="float: right;">Forgot Password?</a>
						</div>
						<div class="form-block" style="text-align: center;">
							<button style="width:105px;height: 35px;background-color: #a0d2cf;" type="submit" class="btn btn-primary" name="login">Login</button>
						</div>
					</div>
					<div class="col-sm-3"></div>
				</div>
			</form>



			
		</div> <!-- #content -->
	
	</div>

	
</body>
</html>