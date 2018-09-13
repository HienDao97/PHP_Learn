<?php 
	$name="Zent Group";

	$length = strlen($name);
	echo "".$name;
	$str = substr($name, 0,1);
	echo "<br>Ky tu dau tien:".$str;
	$str1 = substr($name, $length-1,$length);
	echo "<br>Ky tu cuoi cung:".$str1;


 ?>