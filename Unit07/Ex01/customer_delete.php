<?php 
	require_once('layouts/connection.php');
	$maKH= $_GET['MaKH'];
	$query="DELETE from khachhang WHERE MaKH='".$maKH."'";
	$status= $conn->query($query);

	 if($status==true){
                setcookie('msg','Xóa thành công',time()+5);
            }else{
                setcookie('msg','Xóa không thành công',time()+5);
            }
            

            header('Location: customers.php');
 ?>