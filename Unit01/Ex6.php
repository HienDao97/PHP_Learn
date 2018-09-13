<?php
echo "Tinh n! <br>";
$n=5;
$gt=1;
do {
	for ($i=1; $i <=$n ; $i++) { 
		# code...
		$gt *= $i;
	}
 	
 } while ($n <0); 
 echo "Giai thua  = ".$gt;
 ?>