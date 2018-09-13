<?php 
	
	session_start();

	if(isset($_POST['id'])&&isset($_POST['name'])&&isset($_POST['phone'])&&isset($_POST['email'])&&isset($_POST['address'])){
	$id = $_POST['id'];
	$name = $_POST['name'];
	$phone=$_POST['phone'];
	$email= $_POST['email'];
	$address= $_POST['address'];
	$_SESSION['info'] = $_POST;
    echo "<pre>";
    print_r($_SESSION['info']);
    echo "</pre>";
	if(is_null($id)&&is_null($name)&&is_null($phone)&&is_null($email)&&is_null($address)){
		
		echo "<h4 >lưu thông tin thành công</h4>";
        // $_SESSION['name']= "zent";
        $_SESSION['isSubmit']=1;
        // setcookie('msg','Dang nhap thanh cong',time()+3);
        // header('Location: admin.php');
	}else{
		echo "<h3 > Lưu thông tin không thành công</h3>";
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
            <legend>PHP-11  STUDENT</legend>
            <div class="form-group">
                <label  for="">Mã số sinh viên</label>
                <input type="text" class="form-control" id="" placeholder="Nhập mã số sinh viên" name="id">
            </div>
            <div class="form-group">
                <label for="">Họ tên sinh viên</label>
                <input type="text" class="form-control" id="" placeholder="Nhập họ tên" name="name">
            </div>
            <div class="form-group">
                <label for="">Số điện thoại</label>
                <input type="text" class="form-control" id="" placeholder="Nhập số điện thoại" name="phone">
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="email" class="form-control" id="" placeholder="Nhập email" name="email">
            </div>
            <div class="form-group">
                <label for="">Gioi tính</label>
                <input type="radio" name="gender" value="Nam"> Male
                <input type="radio" name="gender" value="Nữ"> FeMale
            
            </div>

            
            <div class="form-group">
                <label for="">Địa chỉ</label>
                <input type="text" class="form-control" id="" placeholder="Nhập vào địa chỉ" name="address">
            </div>  
            
            <button type="submit" class="btn btn-primary">Lưu thông tin</button>
        </form>
    </div>
</body>
</html>