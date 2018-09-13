<?php 

	require_once('layouts/connection.php');
    // lay ma san pham can xem 
    $maSP =$_GET['MaSP'];

	// cau lenh truy van co so du lieu

	$query ="DELETE  from sanpham WHERE MaSP = '".$maSP."'";

   // echo "$query";
    
	// thuc thi cau lenh truy van co so du lieu

	

   			$status = $conn->query($query);
            var_dump($status) ;

            if($status==true){
                setcookie('msg','Xóa thành công',time()+5);
            }else{
                setcookie('msg','Xóa không thành công',time()+5);
            }
            

            header('Location: products.php');





 ?>
