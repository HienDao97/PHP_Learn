<?php 

	$name= "ZenttneZ";
	$name2 =strrev($name);
	echo "Chuoi dau vao:".$name;
	if(strcasecmp($name, $name2)==0){
		echo "<br>Day la chuoi Palindrome";
	}else{
		echo "<br>Khong la chuoi Palindrome";
	}
 ?>