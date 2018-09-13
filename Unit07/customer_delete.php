<?php 
	require_once('connection.php');
	$maKH= $_GET['MaKH'];
	$query="DELETE from khachhang WHERE MaKH='".$maKH."'";
	$status= $conn->query($query);

	 if($status==true){
                setcookie('msg','Xoa thanh cong',time()+5);
            }else{
                setcookie('msg','Xoa khong thanh cong',time()+5);
            }
            

            header('Location: customers.php');
 ?>