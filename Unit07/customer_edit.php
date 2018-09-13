<?php 
	require_once('connection.php');
	$maKH = $_GET['MaKH'];
	$query = "SELECT * from khachhang WHERE MaKH = '".$maKH."'";
	$result = $conn->query($query);
	$customer = $result->fetch_assoc();

	

	if(isset($_POST['Update'])){
        $MaKH= $_POST['MaKH'];
	 	$TenKH= $_POST['TenKH'];
	 	$SDT=$_POST['SDT'];
	 	$Email=$_POST['Email'];
	 	$DiaChi= $_POST['DiaChi'];

        $query="UPDATE khachhang SET MaKH='".$MaKH."', TenKH='".$TenKH."', SDT='".$SDT."', Email='".$Email."', DiaChi='".$DiaChi."' WHERE MaKH='".$MaKH."'";

       
        // thuc thi cau lenh truy van co so du lieu

            $status = $conn->query($query);

            
          
            if($status==true){
                setcookie('msg','Update thanh cong',time()+5);
            }else{
                setcookie('msg','Update khong thanh cong',time()+5);
            }
            

            header('Location: customers.php');
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
        <h3>UPDATE KHACH HANG</h3>
        
        <form action="" method="POST" role="form" id="form-register">
            
        
            <div class="form-group">
                <label for="">Ma khach hang</label>
                <input type="text" class="form-control" id="" name="MaKH" placeholder="" value="<?=$customer['MaKH']?>" required>
            </div>
            <div class="form-group">
                <label for="">Ten khach hang</label>
                <input type="text" class="form-control" id="" name="TenKH" placeholder="" value="<?=$customer['TenKH']?>" required>
            </div>
            <div class="form-group">
                <label for="">SDT</label>
                <input type="text" class="form-control" id="" name="SDT" placeholder="" value="<?=$customer['SDT']?>" required>
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="text" class="form-control" id="" name= "Email" placeholder="" value="<?=$customer['Email']?>" required>
            </div>
            <div class="form-group">
                <label for="">Dia Chi</label>
                <input type="text" class="form-control" id="" name= "DiaChi" placeholder="" value="<?=$customer['DiaChi']?>" required>
            </div>
            
            
        
            <button type="submit" class="btn btn-primary" name="Update">UPDATE CUSTOMER</button>
        </form>
    </div>

   
    

    
</body>
</html>