<?php 
	$servername ="localhost";//dia chi may chu chua co so du lieu
	$username="root";
	$password="";
	$dbname="qlbh";


	// tao ra ket noi den CSDL
	$conn = new mysqli($servername,$username,$password,$dbname);

	$conn->set_charset("utf8");
	//check connection

	if($conn->connect_error){
		die("Connection failed: " .$conn->connect_error);

	}
 ?>