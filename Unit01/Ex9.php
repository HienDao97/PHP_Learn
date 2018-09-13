<?php 
	$n=7;
	do {
		for ($j=$n; $j >0 ; $j--) { 
		for ($i=1; $i<=$n ; $i++) { 
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