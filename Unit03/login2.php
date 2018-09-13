<?php 
	if(isset($_POST['email'])&&isset($_POST['pwd'])){

	$email= $_POST['email'];
	$password = $_POST['pwd'];
	if($email=="bk.hust@gmail.com" && $password=="123"){
		echo "<h3> Dang nhap thanh cong</h3>";
		$message = "Thanh cong";
		echo "<script type='text/javascript'>alert('$message');</script>";
	}else{
		echo "<h3> Dang nhap khong thanh cong</h3>";
	}
}
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

    <!-- Latest compiled and minified JavaScript -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <form action="" method="POST" role="form">
            <legend>PHP-11  POST METHOD</legend>
            
            <div class="form-group">
                <label for="">Email</label>
                <input type="email" class="form-control" id="" placeholder="Nhập email" name="email">
            </div>
            
            <div class="form-group">
                <label for="">Password</label>
                <input type="password" class="form-control" id="" placeholder="Nhập vào mật khẩu" name="pwd">
            </div>  
            
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
    </div>
</body>
</html>