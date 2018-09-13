<?php 
	$arr= array(2,4,6,1,7,4,8);
	echo "<pre>";
		print_r($arr);
	echo "</pre>";
	echo "Mang dau vao:";
	foreach ($arr as $key => $value) {
		echo "&nbsp".$value;
		
	}
	//khoi tao gia tri k la index cua mang 
	$k=3;
	if(array_key_exists(3,$arr)){
		unset($arr[3]);
		$arr_new= array_values($arr);
		echo "<br>Mang dau sau khi xoa:";
	foreach ($arr_new as $key => $value) {
		echo "&nbsp".$value;
		
	}
	}else{
		echo "Khong ton tai key";
	}

 ?>