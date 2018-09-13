<?php 
$n=7;
	do {
		for ($j=1; $j <=$n ; $j++) { 
		for ($i=$n; $i>0 ; $i--) { 
			if($j>=$i){
				echo " # ";
			}else{
				echo " ";
			}
		}
		echo "<br>";
	}
	} while ($n <=0);
 ?>