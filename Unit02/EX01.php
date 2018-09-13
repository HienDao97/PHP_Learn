<?php 
	$arr  = array(1,3,5,9,11 );
	
	echo "<pre>";
		print_r($arr);
	echo "</pre>";
	echo "Mang dau vao:";
	foreach ($arr as $key => $value) {
		echo "&nbsp".$value;
		
	}
	$arr_result= array_reverse($arr);
	echo "<br> Mang khi in ra:";
	foreach ($arr_result as $key => $value) {
		echo "&nbsp".$value;
		
	}
	



 ?>