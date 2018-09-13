<?php 
	$arr=array(2,3,8,1,7,9,6,12,15,13);
	echo "<pre>";
		print_r($arr);
	echo "</pre>";
	echo "<br> Mang dau vao:";
	foreach ($arr as $key => $value) {
		echo "&nbsp".$value;
	}
	echo "<br> Dau ra:";
	echo "<br>Danh sach cac so chan:";
	foreach ($arr as $key => $value) {
		if($value%2==0){
			echo "&nbsp".$value;
		}
	}
	echo "<br>Danh sach cac so le:";
	foreach ($arr as $key => $value) {
		if($value%2!=0){
			echo "&nbsp".$value;
		}
	}

 ?>