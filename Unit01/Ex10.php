<?php 
	$n=7;
	do {
		for ($j=$n; $j >0 ; $j--) { 
		for ($i=$n; $i>0; $i--) { 
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