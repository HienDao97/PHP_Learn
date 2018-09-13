<?php 
	
	session_start();
    // print_r($_SESSION);

    if(!isset($_SESSION['isLogin'])){
    	header('Location: login.php');
    }

 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Document</title>
 </head>
 <body>
 	<h3>ADMIN GROUP</h3>
 	<p><?php if(isset($_COOKIE['msg'])){
 		echo $_COOKIE['msg'];
 	} ?></p>
 	<a href="logout.php">DANG XUAT</a>
 </body>
 </html>