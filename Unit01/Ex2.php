<?php
	echo "---Giai phuong trinh bac hai--- <br>";
	$a=1;
	$b=2;
	$c=1;
	if($a==0){
		if($b==0&&$c==0){
			echo "Phuong trinh co vo so nghiem";
		}else if($b==0&& $c!=0){
			echo "Phuong trinh vo nghiem";
		}else{
			echo "Phuong trinh co nghiem x=  ".-$c/$b;
		}
	}else{
		$delta = $b*$b-4*$a*$c;
		if($delta<0){
			echo "Phuong trinh vo nghiem";
		}else if($delta==0){
			echo "Phuong trinh co nghiem duy nhat x= ".-$b/2*$a;
		}else{
			echo "Phuong trinh co hai nghiem phan biet. <br>";
			echo "x1= ".(-$b+sqrt($delta))/(2*$a);
			echo "<br> x2= ".(-$b+sqrt($delta))/(2*$a);
		}
	}
?>