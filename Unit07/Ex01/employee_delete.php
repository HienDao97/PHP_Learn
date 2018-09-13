<?php 
require_once('layouts/connection.php');
$maNV = $_GET['MaNV'];
$query ="DELETE from nhanvien WHERE MaNV='".$maNV."'";
$status = $conn->query($query);
if($status==true){
	setcookie('msg','Xóa thành công',time()+5);
 }else{
 	setcookie('msg','Xóa không thành công',time()+5);
 }
 header('Location:employees.php');

 ?>
