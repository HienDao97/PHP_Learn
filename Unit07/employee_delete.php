<?php 
require_once('connection.php');
$maNV = $_GET['MaNV'];
$query ="DELETE from nhanvien WHERE MaNV='".$maNV."'";
$status = $conn->query($query);
if($status==true){
	setcookie('msg','Xoa thanh cong',time()+5);
 }else{
 	setcookie('msg','Xoa khong thanh cong',time()+5);
 }
 header('Location:employees.php');

 ?>
